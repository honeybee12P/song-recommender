song-recommender
================

This is a song recommender application using Big Data Analysis.
This is the application which gives an option to choose the songs one likes, based on which by implementing  Apriori Algorithm & Naive-bayes Algorithm.


Apriori Algorithm:

Aprioris an algorithm for frequent itemset mining and association rule learning over transactional databases. It proceeds by identifying the frequent individual items in the database and extending them to larger and larger item sets as long as those itemsets appear sufficiently often in the database. The frequent item sets determined by Apriori can be used to determine association rules which highlight general trends in the database: this has applications in domains such as market basket analysis.Find frequent itemsets using an iterative level-wise approach based on candidate generation.Apriori uses a "bottom up" approach, where frequent subsets are extended one item at a time , and groups of candidates are tested against the data. The algorithm terminates when no further successful extensions are found



Input:
  D, a database of transactions.
  min_sup, the minimum support count threshold.


Output:
  L, frequent itemsets in D.


This algorithm has two steps,
  1. Find all the data result sets which has threshold support.
  2. Use the frequent itemset to generate rules(If needed)



Lets consider a case where in the output of naive-Bayes classifier algorithm are,
  P(Shreya Goshal) = 0.4
  P(Sonu Nigam) = 0.3
  P(Sunidhi) = 0.2
  P(KK) = 0.0
  P(MJ) =  0.1
  

     If we chose min_sup as 0.2, then we can filter out  KK and MJ.
Lets consider a case where in there is same probability for many singers, then this also can be soughted using this algorithm. In short it helps in handling data result which lead to clashing assumptions.


Naive Bayes :
A naive Bayes classifier is a simple probabilistic classifier based on applying Bayes' theorem with strong (naive) independence assumptions. A more descriptive term for the underlying probability model would be "independent feature mode.In simple terms, a naive Bayes classifier assumes that the value of a particular feature is unrelated to the presence or absence of any other feature, given the class variable. For example, a fruit may be considered to be an apple if it is red, round, and about 3" in diameter. A naive Bayes classifier considers each of these features to contribute independently to the probability that this fruit is an apple, regardless of the presence or absence of the other features.



The Bayes Naive classiﬁer selects the most likely classiﬁcation P(ai|vj) given the attribute values a1, a2, . . . an.



                                         P(ai|vj) = (nc + mp)/(n + m) 
  


                                    
 where,
          n=Number of cases where v=vj.
          nc=Number of cases where v=vj and a=ai.
          m=Equivalent sample size.
          p= A priori estimate for P(ai|vj).






Lets consider a case where in we have provided user with 5 Shreya Goshal songs and he/she has selected only 2, based on their liking. Then,
                                   n   =  5    (Number of cases where v=Shreya Goshal)
                                   nc  =  2    (Number of cases where v=Shreya Goshal and a=checked)
                                   m   =  3    (Sample size has three parameters - artist,genre and eras)
                                   p   =  0.5 (Probability of choosing a particular singer or not)





Flow chart of the codes :

1.php
  |
  |
(after selection of songs)
  |
  |
2.php---------------if the number of songs displayed are less then the min value, go ahead & display--3.php 
  |                           more songs                                                                |
  |                                                                                                     |
(review the selection)                                                                                  |
  |                                                                                                     |
  |                                                                                                     |  
5.php-----------------------------------------review the selection------------------------------------4.php 
  |
  |
(feedback system)
  |
  |
6.php   
