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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video enhancement configuration.
 *
 * @method string getEnhanceScenarioType() Obtain Enhancement scenario configuration. Valid values:
<li>common: general enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall video quality.</li>
<li>AIGC: overall resolution enhancement. It leverages AI technology to improve the overall video resolution and enhance image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game (video): fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies), obtain smooth UHD effect, target the demand for UHD video from broadcasting/TV Stations and OTT, generate 4K 60fps HDR Ultra-High-Definition Standard Video. Support broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) Set Enhancement scenario configuration. Valid values:
<li>common: general enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall video quality.</li>
<li>AIGC: overall resolution enhancement. It leverages AI technology to improve the overall video resolution and enhance image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game (video): fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies), obtain smooth UHD effect, target the demand for UHD video from broadcasting/TV Stations and OTT, generate 4K 60fps HDR Ultra-High-Definition Standard Video. Support broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
 * @method SuperResolutionInfo getSuperResolution() Obtain Super-resolution configuration. The video will not be processed when the source resolution exceeds the target resolution. Note that large model enhancement cannot be enabled simultaneously.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) Set Super-resolution configuration. The video will not be processed when the source resolution exceeds the target resolution. Note that large model enhancement cannot be enabled simultaneously.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HDRInfo getHdr() Obtain HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHdr(HDRInfo $Hdr) Set HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VideoDenoiseInfo getDenoise() Obtain Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDenoise(VideoDenoiseInfo $Denoise) Set Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() Obtain Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) Set Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ColorEnhanceInfo getColorEnhance() Obtain Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) Set Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LowLightEnhanceInfo getLowLightEnhance() Obtain Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) Set Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScratchRepairInfo getScratchRepair() Obtain Remove scratch configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScratchRepair(ScratchRepairInfo $ScratchRepair) Set Remove scratch configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ArtifactRepairInfo getArtifactRepair() Obtain Artifacts removal configuration. Note that only one of the three items, large model, comprehensive enhancement, and artifacts removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArtifactRepair(ArtifactRepairInfo $ArtifactRepair) Set Artifacts removal configuration. Note that only one of the three items, large model, comprehensive enhancement, and artifacts removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DiffusionEnhanceInfo getDiffusionEnhance() Obtain Large model enhancement configuration. Note that you can configure only one of the large model, comprehensive enhancement, and deburr options. It cannot intersect with super-resolution or noise reduction.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiffusionEnhance(DiffusionEnhanceInfo $DiffusionEnhance) Set Large model enhancement configuration. Note that you can configure only one of the large model, comprehensive enhancement, and deburr options. It cannot intersect with super-resolution or noise reduction.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FrameRateWithDenInfo getFrameRateWithDen() Obtain Frame interpolation frame rate configuration supports fractions. Note that it is mutually exclusive with FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrameRateWithDen(FrameRateWithDenInfo $FrameRateWithDen) Set Frame interpolation frame rate configuration supports fractions. Note that it is mutually exclusive with FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var string Enhancement scenario configuration. Valid values:
<li>common: general enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall video quality.</li>
<li>AIGC: overall resolution enhancement. It leverages AI technology to improve the overall video resolution and enhance image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game (video): fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies), obtain smooth UHD effect, target the demand for UHD video from broadcasting/TV Stations and OTT, generate 4K 60fps HDR Ultra-High-Definition Standard Video. Support broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
     */
    public $EnhanceScenarioType;

    /**
     * @var SuperResolutionInfo Super-resolution configuration. The video will not be processed when the source resolution exceeds the target resolution. Note that large model enhancement cannot be enabled simultaneously.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperResolution;

    /**
     * @var HDRInfo HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hdr;

    /**
     * @var VideoDenoiseInfo Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceInfo Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceInfo Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceInfo Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairInfo Remove scratch configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairInfo Artifacts removal configuration. Note that only one of the three items, large model, comprehensive enhancement, and artifacts removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArtifactRepair;

    /**
     * @var DiffusionEnhanceInfo Large model enhancement configuration. Note that you can configure only one of the large model, comprehensive enhancement, and deburr options. It cannot intersect with super-resolution or noise reduction.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenInfo Frame interpolation frame rate configuration supports fractions. Note that it is mutually exclusive with FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FrameRateWithDen;

    /**
     * @param string $EnhanceScenarioType Enhancement scenario configuration. Valid values:
<li>common: general enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall video quality.</li>
<li>AIGC: overall resolution enhancement. It leverages AI technology to improve the overall video resolution and enhance image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game (video): fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies), obtain smooth UHD effect, target the demand for UHD video from broadcasting/TV Stations and OTT, generate 4K 60fps HDR Ultra-High-Definition Standard Video. Support broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
     * @param SuperResolutionInfo $SuperResolution Super-resolution configuration. The video will not be processed when the source resolution exceeds the target resolution. Note that large model enhancement cannot be enabled simultaneously.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HDRInfo $Hdr HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VideoDenoiseInfo $Denoise Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ColorEnhanceInfo $ColorEnhance Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LowLightEnhanceInfo $LowLightEnhance Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScratchRepairInfo $ScratchRepair Remove scratch configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ArtifactRepairInfo $ArtifactRepair Artifacts removal configuration. Note that only one of the three items, large model, comprehensive enhancement, and artifacts removal, can be configured.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DiffusionEnhanceInfo $DiffusionEnhance Large model enhancement configuration. Note that you can configure only one of the large model, comprehensive enhancement, and deburr options. It cannot intersect with super-resolution or noise reduction.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FrameRateWithDenInfo $FrameRateWithDen Frame interpolation frame rate configuration supports fractions. Note that it is mutually exclusive with FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnhanceScenarioType",$param) and $param["EnhanceScenarioType"] !== null) {
            $this->EnhanceScenarioType = $param["EnhanceScenarioType"];
        }

        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionInfo();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("Hdr",$param) and $param["Hdr"] !== null) {
            $this->Hdr = new HDRInfo();
            $this->Hdr->deserialize($param["Hdr"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new VideoDenoiseInfo();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("ImageQualityEnhance",$param) and $param["ImageQualityEnhance"] !== null) {
            $this->ImageQualityEnhance = new ImageQualityEnhanceInfo();
            $this->ImageQualityEnhance->deserialize($param["ImageQualityEnhance"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhanceInfo();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceInfo();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepairInfo();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("ArtifactRepair",$param) and $param["ArtifactRepair"] !== null) {
            $this->ArtifactRepair = new ArtifactRepairInfo();
            $this->ArtifactRepair->deserialize($param["ArtifactRepair"]);
        }

        if (array_key_exists("DiffusionEnhance",$param) and $param["DiffusionEnhance"] !== null) {
            $this->DiffusionEnhance = new DiffusionEnhanceInfo();
            $this->DiffusionEnhance->deserialize($param["DiffusionEnhance"]);
        }

        if (array_key_exists("FrameRateWithDen",$param) and $param["FrameRateWithDen"] !== null) {
            $this->FrameRateWithDen = new FrameRateWithDenInfo();
            $this->FrameRateWithDen->deserialize($param["FrameRateWithDen"]);
        }
    }
}
