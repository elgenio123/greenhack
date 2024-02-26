import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error

# Read the dataset
df = pd.read_csv('../dataset_files/overall/yield_df.csv')

categorical_columns = df.select_dtypes(include=['object']).columns

# One-hot encode categorical columns
df_encoded = pd.get_dummies(df, columns=categorical_columns)

# Feature selection/engineering
X = df[['average_rain_fall_mm_per_year', 'pesticides_tonnes', 'avg_temp']]
y = df['hg/ha_yield']

# Model selection and training
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
model = LinearRegression()
model.fit(X_train, y_train)

# Model evaluation
y_pred = model.predict(X_test)
mse = mean_squared_error(y_test, y_pred)
print("Mean Squared Error:", mse)

# Interpretation
# Analyze the coefficients of the trained model to understand the impact of environmental factors on crop yield

# Further analysis
# Conduct sensitivity analysis, explore interactions between features, etc.

# Reporting and visualization
# Summarize findings and visualize results
