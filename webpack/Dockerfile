# syntax=docker/dockerfile:1
FROM node:latest

WORKDIR /webpack
COPY . .

RUN npm install

CMD [ "npm", "run", "dev" ]