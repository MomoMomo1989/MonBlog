
import NavBar from './components/NavBar';
export default function Home() {
  return (
    <div className="h-[70vh] w-[100vw] relative ">
      <div className=" z-10 ">
        <NavBar />
      </div>
        <video
        className="absolute top-[60px] w-full h-full object-cover"
        src="/videos/1.mp4"
        autoPlay
        loop
        muted
        playsInline
      ></video>
    </div>
  );
}
