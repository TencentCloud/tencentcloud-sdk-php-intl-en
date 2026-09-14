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
 * Input object information for media processing.
 *
 * @method string getType() Obtain Type of the input source object. Supported values:
<li>COS: COS origin</li>
<li> URL: URL source</li>
<li> AWS-S3: AWS source, currently only support transcoding task </li>
<li> VOD: VOD Pro Edition </li>
 * @method void setType(string $Type) Set Type of the input source object. Supported values:
<li>COS: COS origin</li>
<li> URL: URL source</li>
<li> AWS-S3: AWS source, currently only support transcoding task </li>
<li> VOD: VOD Pro Edition </li>
 * @method CosInputInfo getCosInputInfo() Obtain Required when `Type` is `COS`. It represents the COS object information for media processing.
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set Required when `Type` is `COS`. It represents the COS object information for media processing.
 * @method UrlInputInfo getUrlInputInfo() Obtain 
 * @method void setUrlInputInfo(UrlInputInfo $UrlInputInfo) Set 
 * @method S3InputInfo getS3InputInfo() Obtain 
 * @method void setS3InputInfo(S3InputInfo $S3InputInfo) Set 
 * @method VODInputInfo getVODInputInfo() Obtain 
 * @method void setVODInputInfo(VODInputInfo $VODInputInfo) Set 
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string Type of the input source object. Supported values:
<li>COS: COS origin</li>
<li> URL: URL source</li>
<li> AWS-S3: AWS source, currently only support transcoding task </li>
<li> VOD: VOD Pro Edition </li>
     */
    public $Type;

    /**
     * @var CosInputInfo Required when `Type` is `COS`. It represents the COS object information for media processing.
     */
    public $CosInputInfo;

    /**
     * @var UrlInputInfo 
     */
    public $UrlInputInfo;

    /**
     * @var S3InputInfo 
     */
    public $S3InputInfo;

    /**
     * @var VODInputInfo 
     */
    public $VODInputInfo;

    /**
     * @param string $Type Type of the input source object. Supported values:
<li>COS: COS origin</li>
<li> URL: URL source</li>
<li> AWS-S3: AWS source, currently only support transcoding task </li>
<li> VOD: VOD Pro Edition </li>
     * @param CosInputInfo $CosInputInfo Required when `Type` is `COS`. It represents the COS object information for media processing.
     * @param UrlInputInfo $UrlInputInfo 
     * @param S3InputInfo $S3InputInfo 
     * @param VODInputInfo $VODInputInfo 
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
