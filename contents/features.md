<a id="search"></a>
# Features

## Searching

Searching in *bibimbap* is done using the
*search* command. *bibimbap* automatically combines similar results coming
from multiple sources:

    bibimbap> search effects
    
      [0] S.Yu, Y.Xu, M.Liu, F.Zheng, "Optimal Policy for Single-Machine Scheduling with ...", COCOA, 2011
      [1] I.Paule, P.Girard, M.Tod, "Empirical Bayes estimation of random effects of a ...", CMPB, 2011
      [2] T.S.Behrend, L.F.Thompson, "Similarity effects in online training: Effects with ...", CHB, 2011
      [3] J.J.Remes et al., "Effects of repeatability measures on results of fMRI sICA: A ...", NeuroImage, 2011
      [4] J.D.Madden, R.C.Arkin, "Modeling the effects of mass and age variation in wolves ...", ROBIO, 2011
      [5] J.Gu, K.Guan, H.Wu, "Is performance driven by industry effects or firm effects? ...", IJNVO, 2010
      [6] C.Iani, R.Job, R.Padovani, R.Nicoletti, "Stroop effects on redemption and ...", CP, 2009
      [7] A.C.Leon, M.Heo, "Sample sizes required to detect interactions between two binary ...", CSDA, 2009
      [8] A.Henriksen, P.E.Pedersen, "Enterprise Portal Personalization: Direct and Indirect...", HICSS, 2009
      [9] H.Kitahata, "Convective Effects in a Reaction-Diffusion System: Marangoni Effects ...", IJUC, 2009

From search results, you will be able to perform several operations.
Along with the command, you need to specify which element(s) in the
list you want to select. You can for instance specify one entry using its
intex, e.g. *3*. You can also specify
multiple entries by either separating them by commas: *4,5*, or by specifying a
range: *1-5*. You can also select every results by using *\**.

The most common operations on search results include:

  * *edit*: Edits the entry(ies) (See <a href="#edit">edit</a>).
  * *import*: Imports the entry(ies) in the managed file.
  * *show*: Displays the fields of the entry(ies).
  * *bib*: Displays the entry(ies) in BibTeX format.

For example:

    bibimbap> bib 0,3
    
    @inproceedings{YuETAL11OptimalPolicySinglemachineSchedulingDeteriorationEffects,
             title = {Optimal Policy for Single-Machine Scheduling with Deterioration Effects, Learning Effects, Setup Times, and Availability Constraints},
            author = {Sheng Yu and Yinfeng Xu and Ming Liu and Feifeng Zheng},
            editor = {Weifan Wang and Xuding Zhu and Ding-Zhu Du},
         booktitle = {COCOA},
              year = {2011},
             pages = {64--73},
              dblp = {1296983},
               doi = {10.1007/978-3-642-22616-8_6},
              link = {http://dx.doi.org/10.1007/978-3-642-22616-8_6},
               url = {http://www.dblp.org/rec/bibtex/conf/cocoa/YuXLZ11}
    }
    @article{RemesETAL11EffectsRepeatabilityMeasuresResultsFmriSica,
             title = {Effects of repeatability measures on results of fMRI sICA: A study on simulated and real resting-state effects},
            author = {Jukka J. Remes and Tuomo Starck and Juha Nikkinen and Esa Ollila and Christian F. Beckmann and Osmo Tervonen and Vesa Kiviniemi and Olli Silven},
           journal = {NeuroImage},
              year = {2011},
            number = {2},
             pages = {554--569},
            volume = {56},
              dblp = {1429053},
               doi = {10.1016/j.neuroimage.2010.04.268},
              link = {http://dx.doi.org/10.1016/j.neuroimage.2010.04.268},
               url = {http://www.dblp.org/rec/bibtex/journals/neuroimage/RemesSNOBTKS11}
    }
    
    bibimbap> import 0
    
      ➤  Entry key: \cite{YuETAL11OptimalPolicySinglemachineSchedulingDeteriorationEffects}


The *last* or *list* commands can be used to display the current results list again.

#### Sources

Searching may use multiple online or offline sources. You can manage sources
using the *sources* command family. By default, *bibimbap* uses three sources:

    bibimbap> sources
    
     on  [0] managed file
     on  [1] local cache
     on  [2] DBLP

  * **managed file**: your managed file, which by default is named `managed.bib`.
  * **Local cache**: a lucene-based cache storing entries you recently worked with
  * **DBLP**: the online Computer Science bibliography (<a href="http://dblp.org">http://dblp.org</a>)

You can enable or disable sources, using the *sources enable* and *sources
disable* commands

    bibimbap> sources disable 1,2
    
      ➤  Source(s) disabled
    
    bibimbap> sources
    
     on  [0] managed file
     off [1] local cache
     off [2] DBLP

Along with the predefined sources you can use existing local bibliographies as additional sources using the *load* or *sources add*
<a id="edit"></a>

    bibimbap> load pnew.bib
    
      ➤  Source added!
    
    bibimbap> sources
    
     on  [0] managed file
     off [1] local cache
     off [2] DBLP
     on  [3] bibtex: pnew.bib
    

## Edit

*bibimbap* allows you to seamlessly edit existing entries.

    bibimbap> edit 0
    
               entry key = YuETAL11OptimalPolicySinglemachineSchedulingDeteriorationEffects
                 title * = Optimal Policy for Single-Machine Scheduling with Deterioration Effects, Learning Effects, Setup Times, and Availability Constraints
                author * = Sheng Yu and Yinfeng Xu and Ming Liu and Feifeng Zheng
             booktitle * = COCOA
                  year * = 2011
                  editor = Weifan Wang and Xuding Zhu and Ding-Zhu Du
                  volume = 
                  number = 
                  series = 
                   pages = 64--73
                 address = 
                   month = 
            organization = 
               publisher = 
                    note = 
                     key = 
      ➤  Entry modified!

The modified entries will take the place of the old entries directly in the search results. Entries that are edited but not yet saved will appear in the results list with the **e** symbol:
<a id="create"></a>

    bibimbap> last
    
     e [0] S.Yu, Y.Xu, M.Liu, F.Zheng, "Optimal Policy for Single-Machine Scheduling with ...", COCOA, 2011
    ...
    
     Legend:
       e : Edited
    

## Create

Similarly to edit, you can create fresh BibTeX entries using the *new* command. The newly created entry will be placed in the results list for future use.

    bibimbap> new
    
              entry type = article
               entry key = 
                 title * = This is the title
                author * = Me
               journal * = wat?
                  year * = 2014
                  volume = 
                  number = 
                   pages = 
                   month = 
                    note = 
                     key = 
    
      ➤  New entry created!
    
    bibimbap> last
    
     e [0] Me, "This is the title", wat?, 2014
    
     Legend:
       e : Edited
    
    bibimbap> bib 0
    
    @article{Me14ThisIsTitle,
             title = {This is the title},
            author = {Me},
           journal = {wat?},
              year = {2014}
    }

<a id="maintain"></a>
## Maintain

*bibimbap* will also be able to help you maintain your existing bibliographies.
For instance, it is able to use the defined sources to complete the entries
found in an existing bibliography. This can be done using the *consolidate*
command:

    bibimbap> consolidate pnew2.bib
    
        18% (40/212)
        37% (80/212)
        56% (120/212)
        75% (160/212)
        94% (200/212)
      ➤  Modified 18 entries.
      ➤  Consolidated file saved to pnew2-consolidated.bib


You can also parse, check, and reformat existing files using the *lint* command:

    bibimbap> lint pnew2.bib
    
      ➤  Expected : identifier (414:7)
      ➤  Constant string Cambridge is undefined. (2354:18)
      ➤  Reformatted file saved to pnew2-lint.bib
