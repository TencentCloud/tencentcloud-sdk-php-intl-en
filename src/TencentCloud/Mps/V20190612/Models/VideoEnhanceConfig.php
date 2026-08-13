<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video enhancement configuration.
 *
 * @method FrameRateConfig getFrameRate() Obtain <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
 * @method void setFrameRate(FrameRateConfig $FrameRate) Set <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
 * @method SuperResolutionConfig getSuperResolution() Obtain <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) Set <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
 * @method HdrConfig getHdr() Obtain <p>HDR configuration.</p>
 * @method void setHdr(HdrConfig $Hdr) Set <p>HDR configuration.</p>
 * @method VideoDenoiseConfig getDenoise() Obtain <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
 * @method void setDenoise(VideoDenoiseConfig $Denoise) Set <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
 * @method ImageQualityEnhanceConfig getImageQualityEnhance() Obtain <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
 * @method void setImageQualityEnhance(ImageQualityEnhanceConfig $ImageQualityEnhance) Set <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
 * @method ColorEnhanceConfig getColorEnhance() Obtain <p>Color enhancement configuration.</p>
 * @method void setColorEnhance(ColorEnhanceConfig $ColorEnhance) Set <p>Color enhancement configuration.</p>
 * @method LowLightEnhanceConfig getLowLightEnhance() Obtain <p>Low-light enhancement configuration.</p>
 * @method void setLowLightEnhance(LowLightEnhanceConfig $LowLightEnhance) Set <p>Low-light enhancement configuration.</p>
 * @method ScratchRepairConfig getScratchRepair() Obtain <p>Scratches removal configuration.</p>
 * @method void setScratchRepair(ScratchRepairConfig $ScratchRepair) Set <p>Scratches removal configuration.</p>
 * @method ArtifactRepairConfig getArtifactRepair() Obtain <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
 * @method void setArtifactRepair(ArtifactRepairConfig $ArtifactRepair) Set <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
 * @method string getEnhanceSceneType() Obtain <p>Enhanced scenario configuration, available values:</p><li>common (General), general enhancement parameter, suitable for various video types, foundation optimization parameters, enhance overall video quality.</li><li>AIGC, overall resolution enhancement, use AI technology to enhance video overall resolution, improve image definition.</li><li>short_play (Mini-drama & AI simulation drama), enhance face and subtitle details, highlight facial expression details and subtitle clarity, improve viewing experience.</li><li>AI_comic (AI comic drama), enhance comic style image detail.</li><li>short_video (short video), optimize complex and diverse image quality issues, target complex scenarios in short videos, optimize video quality, address multiple visual issues.</li><li>game (Gaming video), restore motion blur, enhance details, focus on enhancing the clarity of game details, restore motion blur areas, make the game screen content clearer and more various.</li><li>HD_movie_series (Ultra-high-definition TV shows and movies), obtain ultra-high-definition smooth effect, target the demand for broadcasting/OTT ultra-high-definition video, generate 4K 60fps HDR Ultra-High-Definition Standard video. Support broadcasting scenario format standards.</li><li>LQ_material (Low-quality material/Classic film restoration), overall resolution enhancement, target old video with insufficient resolution, blur distortion, scratch damage and color temperature issues due to older shooting era for specialized optimization.</li><li>lecture (Showroom/E-commerce/Conference/lecture), beautify and enhance face effect, target scenarios where people explain in showroom/e-commerce/conference/lecture, perform specialized optimization for face region, noise reduction, burr processing.</li><li>Fill-in string represents non-use of enhanced scenario.</li>
 * @method void setEnhanceSceneType(string $EnhanceSceneType) Set <p>Enhanced scenario configuration, available values:</p><li>common (General), general enhancement parameter, suitable for various video types, foundation optimization parameters, enhance overall video quality.</li><li>AIGC, overall resolution enhancement, use AI technology to enhance video overall resolution, improve image definition.</li><li>short_play (Mini-drama & AI simulation drama), enhance face and subtitle details, highlight facial expression details and subtitle clarity, improve viewing experience.</li><li>AI_comic (AI comic drama), enhance comic style image detail.</li><li>short_video (short video), optimize complex and diverse image quality issues, target complex scenarios in short videos, optimize video quality, address multiple visual issues.</li><li>game (Gaming video), restore motion blur, enhance details, focus on enhancing the clarity of game details, restore motion blur areas, make the game screen content clearer and more various.</li><li>HD_movie_series (Ultra-high-definition TV shows and movies), obtain ultra-high-definition smooth effect, target the demand for broadcasting/OTT ultra-high-definition video, generate 4K 60fps HDR Ultra-High-Definition Standard video. Support broadcasting scenario format standards.</li><li>LQ_material (Low-quality material/Classic film restoration), overall resolution enhancement, target old video with insufficient resolution, blur distortion, scratch damage and color temperature issues due to older shooting era for specialized optimization.</li><li>lecture (Showroom/E-commerce/Conference/lecture), beautify and enhance face effect, target scenarios where people explain in showroom/e-commerce/conference/lecture, perform specialized optimization for face region, noise reduction, burr processing.</li><li>Fill-in string represents non-use of enhanced scenario.</li>
 * @method DiffusionEnhanceConfig getDiffusionEnhance() Obtain <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot intersect with super-resolution and noise reduction.</p>
 * @method void setDiffusionEnhance(DiffusionEnhanceConfig $DiffusionEnhance) Set <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot intersect with super-resolution and noise reduction.</p>
 * @method FrameRateWithDenConfig getFrameRateWithDen() Obtain <p>The new frame interpolation frame rate configuration supports fractions. Note that you must choose between this and FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.</p>
 * @method void setFrameRateWithDen(FrameRateWithDenConfig $FrameRateWithDen) Set <p>The new frame interpolation frame rate configuration supports fractions. Note that you must choose between this and FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.</p>
 * @method AiRestorationConfig getAiRestoration() Obtain <p>Large model repair configuration. Note that you can configure at most one of large model, comprehensive enhancement, and artifacts removal. It cannot intersect with super-resolution and noise reduction.</p>
 * @method void setAiRestoration(AiRestorationConfig $AiRestoration) Set <p>Large model repair configuration. Note that you can configure at most one of large model, comprehensive enhancement, and artifacts removal. It cannot intersect with super-resolution and noise reduction.</p>
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var FrameRateConfig <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
     */
    public $FrameRate;

    /**
     * @var SuperResolutionConfig <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
     */
    public $SuperResolution;

    /**
     * @var HdrConfig <p>HDR configuration.</p>
     */
    public $Hdr;

    /**
     * @var VideoDenoiseConfig <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceConfig <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceConfig <p>Color enhancement configuration.</p>
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceConfig <p>Low-light enhancement configuration.</p>
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairConfig <p>Scratches removal configuration.</p>
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairConfig <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
     */
    public $ArtifactRepair;

    /**
     * @var string <p>Enhanced scenario configuration, available values:</p><li>common (General), general enhancement parameter, suitable for various video types, foundation optimization parameters, enhance overall video quality.</li><li>AIGC, overall resolution enhancement, use AI technology to enhance video overall resolution, improve image definition.</li><li>short_play (Mini-drama & AI simulation drama), enhance face and subtitle details, highlight facial expression details and subtitle clarity, improve viewing experience.</li><li>AI_comic (AI comic drama), enhance comic style image detail.</li><li>short_video (short video), optimize complex and diverse image quality issues, target complex scenarios in short videos, optimize video quality, address multiple visual issues.</li><li>game (Gaming video), restore motion blur, enhance details, focus on enhancing the clarity of game details, restore motion blur areas, make the game screen content clearer and more various.</li><li>HD_movie_series (Ultra-high-definition TV shows and movies), obtain ultra-high-definition smooth effect, target the demand for broadcasting/OTT ultra-high-definition video, generate 4K 60fps HDR Ultra-High-Definition Standard video. Support broadcasting scenario format standards.</li><li>LQ_material (Low-quality material/Classic film restoration), overall resolution enhancement, target old video with insufficient resolution, blur distortion, scratch damage and color temperature issues due to older shooting era for specialized optimization.</li><li>lecture (Showroom/E-commerce/Conference/lecture), beautify and enhance face effect, target scenarios where people explain in showroom/e-commerce/conference/lecture, perform specialized optimization for face region, noise reduction, burr processing.</li><li>Fill-in string represents non-use of enhanced scenario.</li>
     */
    public $EnhanceSceneType;

    /**
     * @var DiffusionEnhanceConfig <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot intersect with super-resolution and noise reduction.</p>
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenConfig <p>The new frame interpolation frame rate configuration supports fractions. Note that you must choose between this and FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.</p>
     */
    public $FrameRateWithDen;

    /**
     * @var AiRestorationConfig <p>Large model repair configuration. Note that you can configure at most one of large model, comprehensive enhancement, and artifacts removal. It cannot intersect with super-resolution and noise reduction.</p>
     */
    public $AiRestoration;

    /**
     * @param FrameRateConfig $FrameRate <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
     * @param SuperResolutionConfig $SuperResolution <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
     * @param HdrConfig $Hdr <p>HDR configuration.</p>
     * @param VideoDenoiseConfig $Denoise <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
     * @param ImageQualityEnhanceConfig $ImageQualityEnhance <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
     * @param ColorEnhanceConfig $ColorEnhance <p>Color enhancement configuration.</p>
     * @param LowLightEnhanceConfig $LowLightEnhance <p>Low-light enhancement configuration.</p>
     * @param ScratchRepairConfig $ScratchRepair <p>Scratches removal configuration.</p>
     * @param ArtifactRepairConfig $ArtifactRepair <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
     * @param string $EnhanceSceneType <p>Enhanced scenario configuration, available values:</p><li>common (General), general enhancement parameter, suitable for various video types, foundation optimization parameters, enhance overall video quality.</li><li>AIGC, overall resolution enhancement, use AI technology to enhance video overall resolution, improve image definition.</li><li>short_play (Mini-drama & AI simulation drama), enhance face and subtitle details, highlight facial expression details and subtitle clarity, improve viewing experience.</li><li>AI_comic (AI comic drama), enhance comic style image detail.</li><li>short_video (short video), optimize complex and diverse image quality issues, target complex scenarios in short videos, optimize video quality, address multiple visual issues.</li><li>game (Gaming video), restore motion blur, enhance details, focus on enhancing the clarity of game details, restore motion blur areas, make the game screen content clearer and more various.</li><li>HD_movie_series (Ultra-high-definition TV shows and movies), obtain ultra-high-definition smooth effect, target the demand for broadcasting/OTT ultra-high-definition video, generate 4K 60fps HDR Ultra-High-Definition Standard video. Support broadcasting scenario format standards.</li><li>LQ_material (Low-quality material/Classic film restoration), overall resolution enhancement, target old video with insufficient resolution, blur distortion, scratch damage and color temperature issues due to older shooting era for specialized optimization.</li><li>lecture (Showroom/E-commerce/Conference/lecture), beautify and enhance face effect, target scenarios where people explain in showroom/e-commerce/conference/lecture, perform specialized optimization for face region, noise reduction, burr processing.</li><li>Fill-in string represents non-use of enhanced scenario.</li>
     * @param DiffusionEnhanceConfig $DiffusionEnhance <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot intersect with super-resolution and noise reduction.</p>
     * @param FrameRateWithDenConfig $FrameRateWithDen <p>The new frame interpolation frame rate configuration supports fractions. Note that you must choose between this and FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.</p>
     * @param AiRestorationConfig $AiRestoration <p>Large model repair configuration. Note that you can configure at most one of large model, comprehensive enhancement, and artifacts removal. It cannot intersect with super-resolution and noise reduction.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = new FrameRateConfig();
            $this->FrameRate->deserialize($param["FrameRate"]);
        }

        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionConfig();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("Hdr",$param) and $param["Hdr"] !== null) {
            $this->Hdr = new HdrConfig();
            $this->Hdr->deserialize($param["Hdr"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new VideoDenoiseConfig();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("ImageQualityEnhance",$param) and $param["ImageQualityEnhance"] !== null) {
            $this->ImageQualityEnhance = new ImageQualityEnhanceConfig();
            $this->ImageQualityEnhance->deserialize($param["ImageQualityEnhance"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhanceConfig();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceConfig();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepairConfig();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("ArtifactRepair",$param) and $param["ArtifactRepair"] !== null) {
            $this->ArtifactRepair = new ArtifactRepairConfig();
            $this->ArtifactRepair->deserialize($param["ArtifactRepair"]);
        }

        if (array_key_exists("EnhanceSceneType",$param) and $param["EnhanceSceneType"] !== null) {
            $this->EnhanceSceneType = $param["EnhanceSceneType"];
        }

        if (array_key_exists("DiffusionEnhance",$param) and $param["DiffusionEnhance"] !== null) {
            $this->DiffusionEnhance = new DiffusionEnhanceConfig();
            $this->DiffusionEnhance->deserialize($param["DiffusionEnhance"]);
        }

        if (array_key_exists("FrameRateWithDen",$param) and $param["FrameRateWithDen"] !== null) {
            $this->FrameRateWithDen = new FrameRateWithDenConfig();
            $this->FrameRateWithDen->deserialize($param["FrameRateWithDen"]);
        }

        if (array_key_exists("AiRestoration",$param) and $param["AiRestoration"] !== null) {
            $this->AiRestoration = new AiRestorationConfig();
            $this->AiRestoration->deserialize($param["AiRestoration"]);
        }
    }
}
