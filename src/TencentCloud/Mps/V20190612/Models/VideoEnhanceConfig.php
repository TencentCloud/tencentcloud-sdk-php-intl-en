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
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrameRate(FrameRateConfig $FrameRate) Set <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method SuperResolutionConfig getSuperResolution() Obtain <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) Set <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method HdrConfig getHdr() Obtain <p>HDR configuration.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setHdr(HdrConfig $Hdr) Set <p>HDR configuration.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method VideoDenoiseConfig getDenoise() Obtain <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setDenoise(VideoDenoiseConfig $Denoise) Set <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method ImageQualityEnhanceConfig getImageQualityEnhance() Obtain <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageQualityEnhance(ImageQualityEnhanceConfig $ImageQualityEnhance) Set <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method ColorEnhanceConfig getColorEnhance() Obtain <p>Color enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setColorEnhance(ColorEnhanceConfig $ColorEnhance) Set <p>Color enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method LowLightEnhanceConfig getLowLightEnhance() Obtain <p>Low-light enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setLowLightEnhance(LowLightEnhanceConfig $LowLightEnhance) Set <p>Low-light enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method ScratchRepairConfig getScratchRepair() Obtain <p>Scratch removal configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setScratchRepair(ScratchRepairConfig $ScratchRepair) Set <p>Scratch removal configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method ArtifactRepairConfig getArtifactRepair() Obtain <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setArtifactRepair(ArtifactRepairConfig $ArtifactRepair) Set <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnhanceSceneType() Obtain <p>Enhancement scenario configuration. Valid values:</p><li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li><li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li><li>short_play (short dramas &amp; AI human-like dramas): enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li><li>ai_comic: enhance details in comic-style visuals.</li><li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li><li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li><li>HD_movie_series: provide a smooth playback effect for UHD videos. Standard 4K HDR videos with an FPS of 60 are generated to meet the needs of broadcasting/OTT for UHD videos. Formats for broadcasting scenarios are supported.</li><li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li><li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li><li>Input of a null string indicates that the enhancement scenario is not used.</li>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnhanceSceneType(string $EnhanceSceneType) Set <p>Enhancement scenario configuration. Valid values:</p><li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li><li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li><li>short_play (short dramas &amp; AI human-like dramas): enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li><li>ai_comic: enhance details in comic-style visuals.</li><li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li><li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li><li>HD_movie_series: provide a smooth playback effect for UHD videos. Standard 4K HDR videos with an FPS of 60 are generated to meet the needs of broadcasting/OTT for UHD videos. Formats for broadcasting scenarios are supported.</li><li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li><li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li><li>Input of a null string indicates that the enhancement scenario is not used.</li>
Attention: This field may return null, indicating that no valid values can be obtained.
 * @method DiffusionEnhanceConfig getDiffusionEnhance() Obtain <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiffusionEnhance(DiffusionEnhanceConfig $DiffusionEnhance) Set <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method FrameRateWithDenConfig getFrameRateWithDen() Obtain <p>New frame rate configuration for the frame interpolation, which supports fractions. Note that it is mutually exclusive with FrameRate. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrameRateWithDen(FrameRateWithDenConfig $FrameRateWithDen) Set <p>New frame rate configuration for the frame interpolation, which supports fractions. Note that it is mutually exclusive with FrameRate. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method AiRestorationConfig getAiRestoration() Obtain <p>LLM repair configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 * @method void setAiRestoration(AiRestorationConfig $AiRestoration) Set <p>LLM repair configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var FrameRateConfig <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $FrameRate;

    /**
     * @var SuperResolutionConfig <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperResolution;

    /**
     * @var HdrConfig <p>HDR configuration.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hdr;

    /**
     * @var VideoDenoiseConfig <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceConfig <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceConfig <p>Color enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceConfig <p>Low-light enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairConfig <p>Scratch removal configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairConfig <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArtifactRepair;

    /**
     * @var string <p>Enhancement scenario configuration. Valid values:</p><li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li><li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li><li>short_play (short dramas &amp; AI human-like dramas): enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li><li>ai_comic: enhance details in comic-style visuals.</li><li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li><li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li><li>HD_movie_series: provide a smooth playback effect for UHD videos. Standard 4K HDR videos with an FPS of 60 are generated to meet the needs of broadcasting/OTT for UHD videos. Formats for broadcasting scenarios are supported.</li><li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li><li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li><li>Input of a null string indicates that the enhancement scenario is not used.</li>
Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnhanceSceneType;

    /**
     * @var DiffusionEnhanceConfig <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenConfig <p>New frame rate configuration for the frame interpolation, which supports fractions. Note that it is mutually exclusive with FrameRate. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $FrameRateWithDen;

    /**
     * @var AiRestorationConfig <p>LLM repair configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     */
    public $AiRestoration;

    /**
     * @param FrameRateConfig $FrameRate <p>Frame rate configuration (old) for the frame interpolation. New users are recommended to use FrameRateWithDen for configuring the frame rate of frame interpolation, which supports fractions and provides better results. Note that FrameRate and FrameRateWithDen are mutually exclusive; configuring both simultaneously may cause task failures. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param SuperResolutionConfig $SuperResolution <p>Super-resolution configuration. The video is not processed when the source resolution is higher than the target resolution. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param HdrConfig $Hdr <p>HDR configuration.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param VideoDenoiseConfig $Denoise <p>Video noise reduction configuration. Note that it cannot be enabled simultaneously with LLM enhancement.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param ImageQualityEnhanceConfig $ImageQualityEnhance <p>Comprehensive enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param ColorEnhanceConfig $ColorEnhance <p>Color enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     * @param LowLightEnhanceConfig $LowLightEnhance <p>Low-light enhancement configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     * @param ScratchRepairConfig $ScratchRepair <p>Scratch removal configuration.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     * @param ArtifactRepairConfig $ArtifactRepair <p>Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.</p>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnhanceSceneType <p>Enhancement scenario configuration. Valid values:</p><li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li><li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li><li>short_play (short dramas &amp; AI human-like dramas): enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li><li>ai_comic: enhance details in comic-style visuals.</li><li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li><li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li><li>HD_movie_series: provide a smooth playback effect for UHD videos. Standard 4K HDR videos with an FPS of 60 are generated to meet the needs of broadcasting/OTT for UHD videos. Formats for broadcasting scenarios are supported.</li><li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li><li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li><li>Input of a null string indicates that the enhancement scenario is not used.</li>
Attention: This field may return null, indicating that no valid values can be obtained.
     * @param DiffusionEnhanceConfig $DiffusionEnhance <p>LLM enhancement configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     * @param FrameRateWithDenConfig $FrameRateWithDen <p>New frame rate configuration for the frame interpolation, which supports fractions. Note that it is mutually exclusive with FrameRate. The configuration does not take effect if the source frame rate is greater than or equal to the target frame rate.</p>Attention: This field may return null, indicating that no valid values can be obtained.
     * @param AiRestorationConfig $AiRestoration <p>LLM repair configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured. It cannot be enabled simultaneously with super-resolution and noise reduction.</p>Attention: This field may return null, indicating that no valid values can be obtained.
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
