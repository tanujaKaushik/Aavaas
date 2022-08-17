// import logo from './logo.svg';
import './App.css';
import Ad_card from './components/AdCard';
import Filter_box from './components/FilterBox';
import Navbar from './components/Navbar';

function App() {
  return (
    <>
    <Navbar/>
    <div className='main mx-20 my-10 flex'>
      <div className='mx-40 py-4 px-8 mt-20 border-2 bg-blue-100 rounded-lg h-96'>
        <Filter_box/>
        </div>
      <div>
        <Ad_card image='avatar.png' name='Tanuja Kaushik' address='Shastri Nagar' city='Bahadurgarh' features='fully furnished, ac, near to market'/>
        <Ad_card image='logo192.png' name='Akanksha' address='Shastri Nagar' city='Manesar' features='fully furnished, ac, near to market'/>
        <Ad_card image='avatar.png' name='Nikita' address='Shastri Nagar' city='Jhajjar' features='fully furnished, ac, near to market'/>
        <Ad_card image='logo192.png' name='Akhila' address='Shastri Nagar' city='Bahadurgarh' features='fully furnished, ac, near to market'/>
      </div>
    </div>
    </>
  );
}

export default App;
