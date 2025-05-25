<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Live recording template details
 *
 * @method integer getDefinition() Obtain Specifies the recording template unique identifier.
 * @method void setDefinition(integer $Definition) Set Specifies the recording template unique identifier.
 * @method HLSConfigureInfo getHLSConfigure() Obtain HLS configuration parameters
 * @method void setHLSConfigure(HLSConfigureInfo $HLSConfigure) Set HLS configuration parameters
 * @method MP4ConfigureInfo getMP4Configure() Obtain MP4 configuration parameter.
 * @method void setMP4Configure(MP4ConfigureInfo $MP4Configure) Set MP4 configuration parameter.
 * @method string getName() Obtain Recording template name.
 * @method void setName(string $Name) Set Recording template name.
 * @method string getComment() Obtain Template description.

 * @method void setComment(string $Comment) Set Template description.

 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: Custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: Custom template.</li>
 * @method string getCreateTime() Obtain Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getUpdateTime() Obtain Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 */
class LiveRecordTemplate extends AbstractModel
{
    /**
     * @var integer Specifies the recording template unique identifier.
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
     * @var string Template description.

     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: Custom template.</li>
     */
    public $Type;

    /**
     * @var string Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Specifies the recording template unique identifier.
     * @param HLSConfigureInfo $HLSConfigure HLS configuration parameters
     * @param MP4ConfigureInfo $MP4Configure MP4 configuration parameter.
     * @param string $Name Recording template name.
     * @param string $Comment Template description.

     * @param string $Type Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: Custom template.</li>
     * @param string $CreateTime Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $UpdateTime Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
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
    }
}
