# DateTimeProviderInterface Meta document

## Introduction

This document describes the process and discussions that led to the DateTimeProviderInterface specification and explains the reasons behind each decision.


## Motivation

Vendors have implemented their own date/time providers and have used them in their packages as dependencies, which may turn out to be a problem if you need to integrate several of such packages in one codebase. We believe that there should be a single source of truth regarding current time, and the fragmentation of implementations that do __de facto__ the same thing is inconvenient.


## Goal

The goal of the specification is to standardize an interface of current time providers to make them interoperable.


## Interface name

TBD


## Exposed methods

TBD


## Timezone

TBD


## Method name

TBD


## PHP version

TBD


## Contributors

The following list contains people who contributed in the discussions or votes, in alphabetical order:

- [Jiří Pudil](https://github.com/jiripudil)
