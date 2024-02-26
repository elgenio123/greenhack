import joblib
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import classification_report


# Read the dataset
df = pd.read_csv('../dataset_files/crop-recommendation/Crop_recommendation.csv')

# Data preprocessing
# Handle missing values if any
# Encode categorical variables if any
# Split data into features and target variable
X = df[['N', 'P', 'K', 'temperature', 'humidity', 'ph', 'rainfall']]
y = df['label']

# Split data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Model selection and training
model = RandomForestClassifier()
model.fit(X_train, y_train)
joblib.dump(model, 'crop_recommendation.pkl')

# Model evaluation
y_pred = model.predict(X_test)
print(classification_report(y_test, y_pred))

# Predictions
# You can make crop recommendations for new data by inputting the features into the trained model
# For example:
new_data = pd.DataFrame({
    'N': [20],
    'P': [30],
    'K': [40],
    'temperature': [50],
    'humidity': [60],
    'ph': [60],
    'rainfall': [70]
})
predicted_crop = model.predict(new_data)
print("Recommended Crop:", predicted_crop)
