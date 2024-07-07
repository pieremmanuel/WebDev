import matplotlib.pyplot as plt
import pandas as pd

plt.style.use('bmh')

df = pd.read_excel('../data/liftingwater.xlsx', sheet_name='Sheet1')

df2 = pd.read_excel('../data/BUILDING WATER.xlsx', sheet_name='Sheet2')

x1 = df['SLNO']

def liftingwater_consumption():
    plt.clf()
    y2 = df['WATER CONSUMPTION  ']
    plt.xlabel('Days in April', fontsize=18)
    plt.ylabel('Litres Lifted from the borewell per day', fontsize=16)
    plt.scatter(x1,y2)
    plt.plot(x1,y2)
    plt.savefig('./assets/liftingwater.png',bbox_inches='tight')

def buildingwater_consumption():
    plt.clf()
    x1 = df2['SL NO ']
    y2 = df2['Total']
    plt.xlabel('Days in April', fontsize=18)
    plt.ylabel('Litres consumed by buildings per Day', fontsize=16)
    plt.scatter(x1,y2)
    plt.plot(x1,y2)
    plt.savefig('./assets/buildingwater.png',bbox_inches='tight')

liftingwater_consumption()
buildingwater_consumption()