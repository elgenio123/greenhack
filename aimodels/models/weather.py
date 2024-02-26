import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
from datetime import datetime as dt
import warnings
from matplotlib import style
from sklearn.decomposition import PCA
from sklearn.cluster import KMeans
warnings.filterwarnings('ignore')

df=pd.read_csv('../dataset_files/weather/weather_prediction_dataset.csv')

print(df.head())

df=df.drop(columns=['DATE'])
corr=df.corr()

style.use('grayscale')
plt.figure(figsize=[12,12])
sns.heatmap(corr,cmap='bwr',square=True)    
pca=PCA(n_components=3)
x=pca.fit_transform(df)
means=KMeans(n_clusters=2,init='k-means++',max_iter=300)

y_predict=means.fit_predict(x)
print(y_predict)