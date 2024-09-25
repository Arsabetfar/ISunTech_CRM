<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda7f66d1f544e6ab12b9080daaf03b4e
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'Intervention\\Image\\AbstractColor' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/AbstractColor.php',
        'Intervention\\Image\\AbstractDecoder' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/AbstractDecoder.php',
        'Intervention\\Image\\AbstractDriver' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/AbstractDriver.php',
        'Intervention\\Image\\AbstractEncoder' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/AbstractEncoder.php',
        'Intervention\\Image\\AbstractFont' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/AbstractFont.php',
        'Intervention\\Image\\AbstractShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/AbstractShape.php',
        'Intervention\\Image\\Commands\\AbstractCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/AbstractCommand.php',
        'Intervention\\Image\\Commands\\Argument' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/Argument.php',
        'Intervention\\Image\\Commands\\ChecksumCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/ChecksumCommand.php',
        'Intervention\\Image\\Commands\\CircleCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/CircleCommand.php',
        'Intervention\\Image\\Commands\\EllipseCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/EllipseCommand.php',
        'Intervention\\Image\\Commands\\ExifCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/ExifCommand.php',
        'Intervention\\Image\\Commands\\IptcCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/IptcCommand.php',
        'Intervention\\Image\\Commands\\LineCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/LineCommand.php',
        'Intervention\\Image\\Commands\\OrientateCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/OrientateCommand.php',
        'Intervention\\Image\\Commands\\PolygonCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/PolygonCommand.php',
        'Intervention\\Image\\Commands\\PsrResponseCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/PsrResponseCommand.php',
        'Intervention\\Image\\Commands\\RectangleCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/RectangleCommand.php',
        'Intervention\\Image\\Commands\\ResponseCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/ResponseCommand.php',
        'Intervention\\Image\\Commands\\StreamCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/StreamCommand.php',
        'Intervention\\Image\\Commands\\TextCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Commands/TextCommand.php',
        'Intervention\\Image\\Constraint' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Constraint.php',
        'Intervention\\Image\\Exception\\ImageException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/ImageException.php',
        'Intervention\\Image\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/InvalidArgumentException.php',
        'Intervention\\Image\\Exception\\MissingDependencyException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/MissingDependencyException.php',
        'Intervention\\Image\\Exception\\NotFoundException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/NotFoundException.php',
        'Intervention\\Image\\Exception\\NotReadableException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/NotReadableException.php',
        'Intervention\\Image\\Exception\\NotSupportedException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/NotSupportedException.php',
        'Intervention\\Image\\Exception\\NotWritableException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/NotWritableException.php',
        'Intervention\\Image\\Exception\\RuntimeException' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Exception/RuntimeException.php',
        'Intervention\\Image\\Facades\\Image' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Facades/Image.php',
        'Intervention\\Image\\File' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/File.php',
        'Intervention\\Image\\Filters\\DemoFilter' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Filters/DemoFilter.php',
        'Intervention\\Image\\Filters\\FilterInterface' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Filters/FilterInterface.php',
        'Intervention\\Image\\Gd\\Color' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Color.php',
        'Intervention\\Image\\Gd\\Commands\\BackupCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/BackupCommand.php',
        'Intervention\\Image\\Gd\\Commands\\BlurCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/BlurCommand.php',
        'Intervention\\Image\\Gd\\Commands\\BrightnessCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/BrightnessCommand.php',
        'Intervention\\Image\\Gd\\Commands\\ColorizeCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/ColorizeCommand.php',
        'Intervention\\Image\\Gd\\Commands\\ContrastCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/ContrastCommand.php',
        'Intervention\\Image\\Gd\\Commands\\CropCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/CropCommand.php',
        'Intervention\\Image\\Gd\\Commands\\DestroyCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/DestroyCommand.php',
        'Intervention\\Image\\Gd\\Commands\\FillCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/FillCommand.php',
        'Intervention\\Image\\Gd\\Commands\\FitCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/FitCommand.php',
        'Intervention\\Image\\Gd\\Commands\\FlipCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/FlipCommand.php',
        'Intervention\\Image\\Gd\\Commands\\GammaCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/GammaCommand.php',
        'Intervention\\Image\\Gd\\Commands\\GetSizeCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/GetSizeCommand.php',
        'Intervention\\Image\\Gd\\Commands\\GreyscaleCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/GreyscaleCommand.php',
        'Intervention\\Image\\Gd\\Commands\\HeightenCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/HeightenCommand.php',
        'Intervention\\Image\\Gd\\Commands\\InsertCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/InsertCommand.php',
        'Intervention\\Image\\Gd\\Commands\\InterlaceCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/InterlaceCommand.php',
        'Intervention\\Image\\Gd\\Commands\\InvertCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/InvertCommand.php',
        'Intervention\\Image\\Gd\\Commands\\LimitColorsCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/LimitColorsCommand.php',
        'Intervention\\Image\\Gd\\Commands\\MaskCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/MaskCommand.php',
        'Intervention\\Image\\Gd\\Commands\\OpacityCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/OpacityCommand.php',
        'Intervention\\Image\\Gd\\Commands\\PickColorCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/PickColorCommand.php',
        'Intervention\\Image\\Gd\\Commands\\PixelCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/PixelCommand.php',
        'Intervention\\Image\\Gd\\Commands\\PixelateCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/PixelateCommand.php',
        'Intervention\\Image\\Gd\\Commands\\ResetCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/ResetCommand.php',
        'Intervention\\Image\\Gd\\Commands\\ResizeCanvasCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/ResizeCanvasCommand.php',
        'Intervention\\Image\\Gd\\Commands\\ResizeCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/ResizeCommand.php',
        'Intervention\\Image\\Gd\\Commands\\RotateCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/RotateCommand.php',
        'Intervention\\Image\\Gd\\Commands\\SharpenCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/SharpenCommand.php',
        'Intervention\\Image\\Gd\\Commands\\TrimCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/TrimCommand.php',
        'Intervention\\Image\\Gd\\Commands\\WidenCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Commands/WidenCommand.php',
        'Intervention\\Image\\Gd\\Decoder' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Decoder.php',
        'Intervention\\Image\\Gd\\Driver' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Driver.php',
        'Intervention\\Image\\Gd\\Encoder' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Encoder.php',
        'Intervention\\Image\\Gd\\Font' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Font.php',
        'Intervention\\Image\\Gd\\Shapes\\CircleShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Shapes/CircleShape.php',
        'Intervention\\Image\\Gd\\Shapes\\EllipseShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Shapes/EllipseShape.php',
        'Intervention\\Image\\Gd\\Shapes\\LineShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Shapes/LineShape.php',
        'Intervention\\Image\\Gd\\Shapes\\PolygonShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Shapes/PolygonShape.php',
        'Intervention\\Image\\Gd\\Shapes\\RectangleShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Gd/Shapes/RectangleShape.php',
        'Intervention\\Image\\Image' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Image.php',
        'Intervention\\Image\\ImageManager' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageManager.php',
        'Intervention\\Image\\ImageManagerStatic' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageManagerStatic.php',
        'Intervention\\Image\\ImageServiceProvider' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageServiceProvider.php',
        'Intervention\\Image\\ImageServiceProviderLaravel4' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageServiceProviderLaravel4.php',
        'Intervention\\Image\\ImageServiceProviderLaravel5' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageServiceProviderLaravel5.php',
        'Intervention\\Image\\ImageServiceProviderLeague' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageServiceProviderLeague.php',
        'Intervention\\Image\\ImageServiceProviderLumen' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/ImageServiceProviderLumen.php',
        'Intervention\\Image\\Imagick\\Color' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Color.php',
        'Intervention\\Image\\Imagick\\Commands\\BackupCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/BackupCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\BlurCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/BlurCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\BrightnessCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/BrightnessCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\ColorizeCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/ColorizeCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\ContrastCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/ContrastCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\CropCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/CropCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\DestroyCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/DestroyCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\ExifCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/ExifCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\FillCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/FillCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\FitCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/FitCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\FlipCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/FlipCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\GammaCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/GammaCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\GetSizeCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/GetSizeCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\GreyscaleCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/GreyscaleCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\HeightenCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/HeightenCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\InsertCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/InsertCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\InterlaceCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/InterlaceCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\InvertCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/InvertCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\LimitColorsCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/LimitColorsCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\MaskCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/MaskCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\OpacityCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/OpacityCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\PickColorCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/PickColorCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\PixelCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/PixelCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\PixelateCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/PixelateCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\ResetCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/ResetCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\ResizeCanvasCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/ResizeCanvasCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\ResizeCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/ResizeCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\RotateCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/RotateCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\SharpenCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/SharpenCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\TrimCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/TrimCommand.php',
        'Intervention\\Image\\Imagick\\Commands\\WidenCommand' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Commands/WidenCommand.php',
        'Intervention\\Image\\Imagick\\Decoder' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Decoder.php',
        'Intervention\\Image\\Imagick\\Driver' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Driver.php',
        'Intervention\\Image\\Imagick\\Encoder' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Encoder.php',
        'Intervention\\Image\\Imagick\\Font' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Font.php',
        'Intervention\\Image\\Imagick\\Shapes\\CircleShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Shapes/CircleShape.php',
        'Intervention\\Image\\Imagick\\Shapes\\EllipseShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Shapes/EllipseShape.php',
        'Intervention\\Image\\Imagick\\Shapes\\LineShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Shapes/LineShape.php',
        'Intervention\\Image\\Imagick\\Shapes\\PolygonShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Shapes/PolygonShape.php',
        'Intervention\\Image\\Imagick\\Shapes\\RectangleShape' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Imagick/Shapes/RectangleShape.php',
        'Intervention\\Image\\Point' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Point.php',
        'Intervention\\Image\\Response' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Response.php',
        'Intervention\\Image\\Size' => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image/Size.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda7f66d1f544e6ab12b9080daaf03b4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda7f66d1f544e6ab12b9080daaf03b4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda7f66d1f544e6ab12b9080daaf03b4e::$classMap;

        }, null, ClassLoader::class);
    }
}
