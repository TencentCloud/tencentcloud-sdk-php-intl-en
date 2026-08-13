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
 * The information of the object to process.
 *
 * @method string getType() Obtain Type of input source object. valid values:.
<Li>COS: specifies the cos origin.</li>
<Li>URL: the url source.</li>
<Li>AWS-S3: aws source. currently only supports transcoding tasks.</li>
<Li>VOD: video-on-demand pro edition (VOD Pro). </li>
 * @method void setType(string $Type) Set Type of input source object. valid values:.
<Li>COS: specifies the cos origin.</li>
<Li>URL: the url source.</li>
<Li>AWS-S3: aws source. currently only supports transcoding tasks.</li>
<Li>VOD: video-on-demand pro edition (VOD Pro). </li>
 * @method CosInputInfo getCosInputInfo() Obtain The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
 * @method UrlInputInfo getUrlInputInfo() Obtain Valid when Type is URL. This item is required and indicates the media processing URL object information.
 * @method void setUrlInputInfo(UrlInputInfo $UrlInputInfo) Set Valid when Type is URL. This item is required and indicates the media processing URL object information.
 * @method S3InputInfo getS3InputInfo() Obtain Valid when Type is AWS-S3. This item is required and represents the AWS S3 object information for media processing.
 * @method void setS3InputInfo(S3InputInfo $S3InputInfo) Set Valid when Type is AWS-S3. This item is required and represents the AWS S3 object information for media processing.
 * @method VODInputInfo getVODInputInfo() Obtain Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition object information.
 * @method void setVODInputInfo(VODInputInfo $VODInputInfo) Set Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition object information.
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string Type of input source object. valid values:.
<Li>COS: specifies the cos origin.</li>
<Li>URL: the url source.</li>
<Li>AWS-S3: aws source. currently only supports transcoding tasks.</li>
<Li>VOD: video-on-demand pro edition (VOD Pro). </li>
     */
    public $Type;

    /**
     * @var CosInputInfo The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
     */
    public $CosInputInfo;

    /**
     * @var UrlInputInfo Valid when Type is URL. This item is required and indicates the media processing URL object information.
     */
    public $UrlInputInfo;

    /**
     * @var S3InputInfo Valid when Type is AWS-S3. This item is required and represents the AWS S3 object information for media processing.
     */
    public $S3InputInfo;

    /**
     * @var VODInputInfo Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition object information.
     */
    public $VODInputInfo;

    /**
     * @param string $Type Type of input source object. valid values:.
<Li>COS: specifies the cos origin.</li>
<Li>URL: the url source.</li>
<Li>AWS-S3: aws source. currently only supports transcoding tasks.</li>
<Li>VOD: video-on-demand pro edition (VOD Pro). </li>
     * @param CosInputInfo $CosInputInfo The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
     * @param UrlInputInfo $UrlInputInfo Valid when Type is URL. This item is required and indicates the media processing URL object information.
     * @param S3InputInfo $S3InputInfo Valid when Type is AWS-S3. This item is required and represents the AWS S3 object information for media processing.
     * @param VODInputInfo $VODInputInfo Valid at that time when Type is VOD. This item is required and represents the Media Processing Service (MPS) video-on-demand (VOD) pro edition object information.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }

        if (array_key_exists("UrlInputInfo",$param) and $param["UrlInputInfo"] !== null) {
            $this->UrlInputInfo = new UrlInputInfo();
            $this->UrlInputInfo->deserialize($param["UrlInputInfo"]);
        }

        if (array_key_exists("S3InputInfo",$param) and $param["S3InputInfo"] !== null) {
            $this->S3InputInfo = new S3InputInfo();
            $this->S3InputInfo->deserialize($param["S3InputInfo"]);
        }

        if (array_key_exists("VODInputInfo",$param) and $param["VODInputInfo"] !== null) {
            $this->VODInputInfo = new VODInputInfo();
            $this->VODInputInfo->deserialize($param["VODInputInfo"]);
        }
    }
}
