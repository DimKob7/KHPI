import collections as coll
import pandas as pn

data = pn.read_csv('titanic.csv', index_col='PassengerId')

print('\n','1. How many men and women were on the ship? ')
print(data.Sex.value_counts())

print('\n','2. How many passengers survived?')
data_survived=data.Survived.value_counts()
print('Survived =>', data_survived[1])
print('Survived percentage=>',round(data.Survived.mean() * 100, 2))

print('\n','3. What is the share of first class passengers among all passengers?')
data_pclass=data.Pclass.value_counts()
print('The share of first class=>',round((data_pclass[1])/(len(data['Pclass'])),3)*100)

print('\n','4.How old were the passengers? Calculate the average and median age of the passengers.')
print('The average age=>', round(data['Age'].mean(), 2))
print('The median age=>', round(data['Age'].median(), 2))

print('\n','5. Does the number of siblings correlate with the number of parents / children?')
print('Pearson correlation =>',data['SibSp'].corr(data['Parch']))

print('\n','6. What is the most popular female name on a ship?')
FemaleNames = list()
for value in data.Name:
    if value.find("Mrs.") != -1:
        nm = value[(value.find("(")+1):].split(' ')
        FemaleNames.append(nm[0])
    elif value.find("Miss.") != -1:
        nm = value[(value.find("Miss.") + len("Miss."))+1:].split(' ')
        FemaleNames.append(nm[0])
    elif value.find("Ms.") != -1:
        nm = value[(value.find("Ms.") + len("Ms."))+1:].split(' ')
        FemaleNames.append(nm[0])
MostPopularName = coll.Counter(FemaleNames)
print(MostPopularName.most_common(5))

