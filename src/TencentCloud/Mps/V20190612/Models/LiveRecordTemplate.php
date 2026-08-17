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
 * Live recording template description
 *
 * @method integer getDefinition() Obtain Unique identifier of the recording template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the recording template.
 * @method HLSConfigureInfo getHLSConfigure() Obtain HLS configuration parameters
 * @method void setHLSConfigure(HLSConfigureInfo $HLSConfigure) Set HLS configuration parameters
 * @method MP4ConfigureInfo getMP4Configure() Obtain MP4 configuration parameter.
 * @method void setMP4Configure(MP4ConfigureInfo $MP4Configure) Set MP4 configuration parameter.
 * @method string getName() Obtain Recording template name.
 * @method void setName(string $Name) Set Recording template name.
 * @method string getComment() Obtain Template description information.
 * @method void setComment(string $Comment) Set Template description information.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: user-defined template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: user-defined template.</li>
 * @method string getCreateTime() Obtain Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getRecordType() Obtain Recording type. Valid values: video: audio and video recording; audio: audio recording; auto: automatic detection.
 * @method void setRecordType(string $RecordType) Set Recording type. Valid values: video: audio and video recording; audio: audio recording; auto: automatic detection.
 */
class LiveRecordTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier of the recording template.
     */
    public $Definition;

    /**
     * @var HLSConfigureInfo HLS configuration parameters
     */
    public $HLSConfigure;

    /**
     * @var MP4ConfigureInfo MP4 configuration parameter.
     */
    public $MP4Configure;

    /**
     * @var string Recording template name.
     */
    public $Name;

    /**
     * @var string Template description information.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: user-defined template.</li>
     */
    public $Type;

    /**
     * @var string Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @var string Recording type. Valid values: video: audio and video recording; audio: audio recording; auto: automatic detection.
     */
    public $RecordType;

    /**
     * @param integer $Definition Unique identifier of the recording template.
     * @param HLSConfigureInfo $HLSConfigure HLS configuration parameters
     * @param MP4ConfigureInfo $MP4Configure MP4 configuration parameter.
     * @param string $Name Recording template name.
     * @param string $Comment Template description information.
     * @param string $Type Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: user-defined template.</li>
     * @param string $CreateTime Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $RecordType Recording type. Valid values: video: audio and video recording; audio: audio recording; auto: automatic detection.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("HLSConfigure",$param) and $param["HLSConfigure"] !== null) {
            $this->HLSConfigure = new HLSConfigureInfo();
            $this->HLSConfigure->deserialize($param["HLSConfigure"]);
        }

        if (array_key_exists("MP4Configure",$param) and $param["MP4Configure"] !== null) {
            $this->MP4Configure = new MP4ConfigureInfo();
            $this->MP4Configure->deserialize($param["MP4Configure"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }
    }
}
