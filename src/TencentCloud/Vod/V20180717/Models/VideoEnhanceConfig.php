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
<li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li>
<li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies) obtains smooth UHD effects. Targeting the demand for UHD video in broadcasting and OTT, it generates Ultra-High-Definition Standard Video at 4K 60fps HDR, supporting broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) Set Enhancement scenario configuration. Valid values:
<li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li>
<li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies) obtains smooth UHD effects. Targeting the demand for UHD video in broadcasting and OTT, it generates Ultra-High-Definition Standard Video at 4K 60fps HDR, supporting broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
 * @method SuperResolutionInfo getSuperResolution() Obtain Super-resolution configuration. If the source resolution is higher than the target resolution, the video will not be processed. Note that it cannot be enabled simultaneously with large model enhancement.
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) Set Super-resolution configuration. If the source resolution is higher than the target resolution, the video will not be processed. Note that it cannot be enabled simultaneously with large model enhancement.
 * @method HDRInfo getHdr() Obtain HDR configuration.
 * @method void setHdr(HDRInfo $Hdr) Set HDR configuration.
 * @method VideoDenoiseInfo getDenoise() Obtain Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
 * @method void setDenoise(VideoDenoiseInfo $Denoise) Set Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() Obtain Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) Set Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
 * @method ColorEnhanceInfo getColorEnhance() Obtain Color enhancement configuration.
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) Set Color enhancement configuration.
 * @method LowLightEnhanceInfo getLowLightEnhance() Obtain Low-light enhancement configuration.
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) Set Low-light enhancement configuration.
 * @method ScratchRepairInfo getScratchRepair() Obtain Remove scratch configuration.
 * @method void setScratchRepair(ScratchRepairInfo $ScratchRepair) Set Remove scratch configuration.
 * @method ArtifactRepairInfo getArtifactRepair() Obtain Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.
 * @method void setArtifactRepair(ArtifactRepairInfo $ArtifactRepair) Set Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.
 * @method DiffusionEnhanceInfo getDiffusionEnhance() Obtain Large model enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured. It cannot be enabled simultaneously with super resolution and noise reduction.
 * @method void setDiffusionEnhance(DiffusionEnhanceInfo $DiffusionEnhance) Set Large model enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured. It cannot be enabled simultaneously with super resolution and noise reduction.
 * @method FrameRateWithDenInfo getFrameRateWithDen() Obtain Frame interpolation frame rate configuration. Supports fractions. Note that you can only specify either this parameter or FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
 * @method void setFrameRateWithDen(FrameRateWithDenInfo $FrameRateWithDen) Set Frame interpolation frame rate configuration. Supports fractions. Note that you can only specify either this parameter or FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var string Enhancement scenario configuration. Valid values:
<li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li>
<li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies) obtains smooth UHD effects. Targeting the demand for UHD video in broadcasting and OTT, it generates Ultra-High-Definition Standard Video at 4K 60fps HDR, supporting broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
     */
    public $EnhanceScenarioType;

    /**
     * @var SuperResolutionInfo Super-resolution configuration. If the source resolution is higher than the target resolution, the video will not be processed. Note that it cannot be enabled simultaneously with large model enhancement.
     */
    public $SuperResolution;

    /**
     * @var HDRInfo HDR configuration.
     */
    public $Hdr;

    /**
     * @var VideoDenoiseInfo Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceInfo Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceInfo Color enhancement configuration.
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceInfo Low-light enhancement configuration.
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairInfo Remove scratch configuration.
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairInfo Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.
     */
    public $ArtifactRepair;

    /**
     * @var DiffusionEnhanceInfo Large model enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured. It cannot be enabled simultaneously with super resolution and noise reduction.
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenInfo Frame interpolation frame rate configuration. Supports fractions. Note that you can only specify either this parameter or FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
     */
    public $FrameRateWithDen;

    /**
     * @param string $EnhanceScenarioType Enhancement scenario configuration. Valid values:
<li>common: common enhancement parameters, which are basic optimization parameters suitable for various video types, enhancing overall image quality.</li>
<li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li>
<li>short_play: enhance facial and subtitle details, emphasizing characters' facial expressions and subtitle clarity to improve the viewing experience.</li>
<li>short_video: optimize complex and diverse image quality issues, tailoring quality enhancements for the complex scenarios such as short videos to address various visual issues.</li>
<li>game: fix motion blur and enhance details, with a focus on enhancing the clarity of game details and restoring blurry areas during motions to make the image content during gaming clearer and richer.</li>
<li>HD_movie_series (UHD TV shows and movies) obtains smooth UHD effects. Targeting the demand for UHD video in broadcasting and OTT, it generates Ultra-High-Definition Standard Video at 4K 60fps HDR, supporting broadcasting scenario format standards.</li>
<li>LQ_material: low-definition material/old video restoration. It enhances overall resolution, and solves issues of old videos, such as low resolution, blur, distortion, scratches, and color temperature due to their age.</li>
<li>lecture: live shows, e-commerce, conferences, and lectures. It improves the face display effect and performs specific optimizations, including face region enhancement, noise reduction, and artifacts removal, for scenarios involving human explanation, such as live shows, e-commerce, conferences, and lectures.</li>
<li>Input of a null string indicates that the enhancement scenario is not used.</li>
     * @param SuperResolutionInfo $SuperResolution Super-resolution configuration. If the source resolution is higher than the target resolution, the video will not be processed. Note that it cannot be enabled simultaneously with large model enhancement.
     * @param HDRInfo $Hdr HDR configuration.
     * @param VideoDenoiseInfo $Denoise Video noise reduction configuration. Note that it cannot be enabled simultaneously with large model enhancement.
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance Comprehensive enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured.
     * @param ColorEnhanceInfo $ColorEnhance Color enhancement configuration.
     * @param LowLightEnhanceInfo $LowLightEnhance Low-light enhancement configuration.
     * @param ScratchRepairInfo $ScratchRepair Remove scratch configuration.
     * @param ArtifactRepairInfo $ArtifactRepair Artifacts removal configuration. Note that only one of the three items, LLM enhancement, comprehensive enhancement, and artifacts removal, can be configured.
     * @param DiffusionEnhanceInfo $DiffusionEnhance Large model enhancement configuration. Note that only one of the three items, large model, comprehensive enhancement, and jitter removal, can be configured. It cannot be enabled simultaneously with super resolution and noise reduction.
     * @param FrameRateWithDenInfo $FrameRateWithDen Frame interpolation frame rate configuration. Supports fractions. Note that you can only specify either this parameter or FrameRate. The capacity will not take effect when the source frame rate is equal to or greater than the target frame rate.
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
