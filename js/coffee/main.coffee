outer = 5
changeNumbers = ->
  inner = -1
  outer = 10
inner = changeNumbers()

console.log inner

#eat = (food) ->  "toast doesn't belong here!" if food is 'toast'
eat = (food) ->
  if food is 'toast' then "toast doesn't belong here!" else "This is correct"

console.log eat food for food in ['toast', 'cheese', 'wine']


evens = (x for x in [0..10] by 2)

#object looping using of
yearsOld = max: 10, ida: 9, tim: 11
ages = for child, age of yearsOld
  "#{child} is #{age}"

console.log ages # the object
console.log ages.join(",") # joins the object

#launch() if ignition is on
#volume = 10 if band isnt SpinalTap
#letTheWildRumpusBegin() unless answer is no
#if car.speed < limit then accelerate()
pick = 92
winner = yes if pick in [47, 92, 13]

# ? means is it undefined / null
solipsism = true if mind? and not world? #if mind is not undefined and null and world is undefined and null
speed = 0
speed ?= 15 # if speed is null set to 15
footprints = yeti ? "bear" # if yeti is not set = bear

#chained expressions
cholesterol = 127
healthy = 200 > cholesterol > 60

#switches are cool
switch day
  when "Mon" then go work
  when "Tue" then go relax
  when "Thu" then go iceFishing
  when "Fri", "Sat"
    if day is bingoDay
      go bingo
      go dancing
  when "Sun" then go church
  else go work

score = 76
grade = switch
  when score < 60 then 'F'
  when score < 70 then 'D'
  when score < 80 then 'C'
  when score < 90 then 'B'
  else 'A'
# grade == 'C'

# this looks like some powerful class syntax.
class Animal
  constructor: (@name) ->

  move: (meters) ->
    alert @name + " moved #{meters}m."

class Snake extends Animal
  move: ->
    alert "Slithering..."
    super 5

class Horse extends Animal
  move: ->
    alert "Galloping..."
    super 45

sam = new Snake "Sammy the Python"
tom = new Horse "Tommy the Palomino"

sam.move()
tom.move()

#destructuring
futurists =
  sculptor: "Umberto Boccioni"
  painter:  "Vladimir Burliuk"
  poet:
    name:   "F.T. Marinetti"
    address: [
      "Via Roma 42R"
      "Bellagio, Italy 22021"
    ]

{poet: {name, address: [street, city]}} = futurists