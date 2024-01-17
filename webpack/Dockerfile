# syntax=docker/dockerfile:1
FROM node:latest

WORKDIR /webpack
RUN echo $(ls)
COPY . .

RUN npm install

CMD [ "npm", "run", "dev" ]