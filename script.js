let displayApp = new Vue({
  el: "#displayApp",
  data: {
    liveScoreEl: "Lo",
    liveScoreVal: 2.2,
    liveScoreSk: 13.4,
    teamA: 50.8,
    teamB: 50.9,
    finalScoreTechnical: 7.84,
    finalScoreComponents: 12.2,
    finalScoreDeduction: 0,
    segmentScore: 0.0,
    finalScore: 0.0,
    rank: 1,
    skaterName: "Ludivine MALLE",
    skaterTeam: "A",
    displayLiveScore: true,
    displayTeamScore: true,
    displayFinalScore: true,
    displaySkater: true,
    count: 0,
    countGet: 0
  },
  methods: {
    timer() {

      setTimeout(() => {
        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
          console.error('Abandon :( Impossible de créer une instance de XMLHTTP');
          return false;
        }
        
        
        httpRequest.onreadystatechange = () => {
          if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
              let  ob = JSON.parse(httpRequest.responseText);

              this.liveScoreEl = ob.liveScoreEl;
              this.liveScoreVal = ob.liveScoreVal;
              this.liveScoreSk = ob.liveScoreSk;
              this.teamA = ob.teamA;
              this.teamB = ob.teamB;
              this.finalScoreTechnical = ob.finalScoreTechnical;
              this.finalScoreComponents = ob.finalScoreComponents;
              this.finalScoreDeduction = ob.finalScoreDeduction;
              this.rank = ob.rank;
              this.skaterName = ob.skaterName;
              this.skaterTeam = ob.skaterTeam;
              this.displayLiveScore = ob.displayLiveScore;
              this.displayTeamScore = ob.displayTeamScore;
              this.displayFinalScore = ob.displayFinalScore;
              this.displaySkater = ob.displaySkater;
              this.segmentScore = ob.segmentScore;
              this.finalScore = ob.finalScore;
              
              this.countGet += 1;

            } else {
              console.error('Il y a eu un problème avec la requête.');
            }

            this.timer();
          }
        };
        httpRequest.open('GET', 'mix.php');
        httpRequest.send(); 
        
        this.count += 1;
      }, 1000);
    }
  },
  mounted() {
      this.timer();
  }
});

