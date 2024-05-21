# import pandas as pd
# import urllib.parse
# import csv
# import re

# def create_html_link(text):
#     url_safe_text = urllib.parse.quote(text.lower().replace(' ', '-'))
#     url = f'http://rini-ru-wp/{url_safe_text}/'
#     return f'<a href="{url}">{text}</a>'

# input_file = 'rini_cartridges_2024-05-16.csv'
# output_file = 'addlinked.csv'

# df = pd.read_csv(input_file)

# df.iloc[:, 0] = df.iloc[:, 0].apply(create_html_link)
# df.to_csv(output_file, index=False, quoting=csv.QUOTE_MINIMAL)

# print(f"Файл успешно обработан и сохранен как {output_file}")

print(range(0, 5))