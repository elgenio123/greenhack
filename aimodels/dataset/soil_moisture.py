import pandas as pd
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import classification_report, mean_squared_error

# Read the dataset
df = pd.read_csv('../dataset_files/soil_moisture/plant_vase1.csv')

X = df.drop(['irrgation'], axis=1)
y = df['irrgation']

# Model selection and training
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
model = RandomForestClassifier()
model.fit(X_train, y_train)

# Model evaluation
y_pred = model.predict(X_test)
print(classification_report(y_test, y_pred))

new_data = pd.DataFrame({
    'year': [2023],
    'month': [12],
    'day': [23],
    'hour': [12],
    'minute': [23],
    'second': [23],
    'moisture0' : [0.1],
    'moisture1' : [0.2],
    'moisture2' : [0.3],
    'moisture3' : [0.5],
    'moisture4' : [0.4]
})
predicted_moisture = model.predict(new_data)
print(f"Predicted moisture : {predicted_moisture}")
