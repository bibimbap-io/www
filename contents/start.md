Get Started
===========

The first step is to <a href="/downloads">download</a> *bibimbap* bootstrap.

    $ wget http://bibimbap.io/files/bibimbap-bootstrap.jar

To run *bibimbap*, simply execute the bootstrap jar in a console. The bootstrap program will make sure you are running the latest version of *bibimbap*:

    $ java -jar bibimbap-bootstrap.jar
    bibimbap jar not found. Downloading latest...
    Installation complete.
             __    _ __    _           __
       ———  / /_  (_) /_  (_)___ ___  / /_  ____ _____  ——————
      ———  / __ \/ / __ \/ / __ `__ \/ __ \/ __ `/ __ \  ————
     ———  / /_/ / / /_/ / / / / / / / /_/ / /_/ / /_/ /  ———
    ———  /_.___/_/_.___/_/_/ /_/ /_/_.___/\__,_/ .___/  ———
                                              /_/         비빔밥
    
    
    bibimbap>

Here is how a session can look like:

    bibimbap> search bryant boolean symbolic
    
      [0] A.Goel, R.E.Bryant, "Symbolic Simulation, Model Checking and Abstraction with Partially ...", CAV, 2004
      [1] S.A.Seshia, R.E.Bryant, "Unbounded, Fully Symbolic Model Checking of Timed Automata ...", CAV, 2003
      [2] A.Goel, R.E.Bryant, "Set Manipulation with Boolean Functional Vectors for Symbolic ...", DATE, 2003
      [3] R.E.Bryant, "Symbolic Boolean Manipulation with Ordered Binary-Decision Diagrams", CSUR, 1992
      [4] R.E.Bryant, "Symbolic manipulation of Boolean functions using a graphical representation", DAC, 1985
    
    bibimbap> bib 4
    
    @inproceedings{Bryant85SymbolicManipulationBooleanFunctionsUsingGraphical,
             title = {Symbolic manipulation of Boolean functions using a graphical representation},
            author = {Randal E. Bryant},
            editor = {Hillel Ofek and Lawrence A. O'Neill},
         booktitle = {DAC},
              year = {1985},
             pages = {688--694},
              dblp = {3180272},
               doi = {10.1145/317825.317964},
              link = {http://doi.acm.org/10.1145/317825.317964},
               url = {http://www.dblp.org/rec/bibtex/conf/dac/Bryant85}
    }
    
    bibimbap> import 4
    
      ➤  Entry key: \cite{DBLP:conf/dac/Bryant85}
    
    bibimbap>

...and that famous BDD paper is now imported in the `managed.bib` file.
Moreoever, the corresponding key is copied to the system clipboard.
