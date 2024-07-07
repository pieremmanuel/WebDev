import matplotlib.pyplot as plt
import pandas as pd

plt.style.use('bmh')

df = pd.read_excel('./data/ElectricityBill.xlsx', sheet_name='Sheet1')
df2 = pd.read_excel('./data/ElectricityBill.xlsx', sheet_name='Sheet2')
x1 = df['SL NO ']

def unit_consumption():
    plt.clf()
    y2 = df['TOTAL UNITS CONSUMPTION PER MONTH']
    plt.xlabel('Months', fontsize=18)
    plt.ylabel('Total Units Consumed Per month', fontsize=16)
    plt.scatter(x1,y2)
    plt.plot(x1,y2)
    plt.savefig('./assets/unitselectricity.png',bbox_inches='tight')

def bill_amount():
    plt.clf()
    y2 = df['TOTAL BILL AMOUNT PER MONTH']
    plt.xlabel('Months', fontsize=18)
    plt.ylabel('Total Bill Amount Per month', fontsize=16)
    plt.plot(x1,y2)
    plt.scatter(x1,y2)
    plt.savefig('./assets/billamt.png',bbox_inches='tight')

def save_amount():
    plt.clf()
    y2 = df2['Saved Amount']
    plt.xlabel('Months', fontsize=18)
    plt.ylabel('Electricity saved Per month', fontsize=16)
    plt.plot(x1,y2)
    plt.scatter(x1,y2)
    plt.savefig('./assets/saveamt.png',bbox_inches='tight')

save_amount()
bill_amount()
unit_consumption()