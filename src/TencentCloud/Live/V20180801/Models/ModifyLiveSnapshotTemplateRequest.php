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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveSnapshotTemplate request structure.
 *
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method integer getCosAppId() Obtain The COS application ID.
**Please note that this parameter is required now**.
 * @method void setCosAppId(integer $CosAppId) Set The COS application ID.
**Please note that this parameter is required now**.
 * @method string getCosBucket() Obtain The COS bucket name.
Note: Do not include the `-[appid]` part in the value of `CosBucket`.
**Please note that this parameter is required now**.
 * @method void setCosBucket(string $CosBucket) Set The COS bucket name.
Note: Do not include the `-[appid]` part in the value of `CosBucket`.
**Please note that this parameter is required now**.
 * @method string getCosRegion() Obtain The COS region.
**Please note that this parameter is required now**.
 * @method void setCosRegion(string $CosRegion) Set The COS region.
**Please note that this parameter is required now**.
 * @method string getTemplateName() Obtain Template name.
Maximum length: 255 bytes.
 * @method void setTemplateName(string $TemplateName) Set Template name.
Maximum length: 255 bytes.
 * @method string getDescription() Obtain Description.
Maximum length: 1,024 bytes.
 * @method void setDescription(string $Description) Set Description.
Maximum length: 1,024 bytes.
 * @method integer getSnapshotInterval() Obtain Screencapturing interval in seconds. Default value: 10s.
Value range: 5-300s.
 * @method void setSnapshotInterval(integer $SnapshotInterval) Set Screencapturing interval in seconds. Default value: 10s.
Value range: 5-300s.
 * @method integer getWidth() Obtain Screenshot width. Default value: 0 (original width).
 * @method void setWidth(integer $Width) Set Screenshot width. Default value: 0 (original width).
 * @method integer getHeight() Obtain Screenshot height. Default value: 0 (original height).
 * @method void setHeight(integer $Height) Set Screenshot height. Default value: 0 (original height).
 * @method integer getPornFlag() Obtain Whether to enable porn detection. Default value: 0.
0: do not enable.
1: enable.
 * @method void setPornFlag(integer $PornFlag) Set Whether to enable porn detection. Default value: 0.
0: do not enable.
1: enable.
 * @method string getCosPrefix() Obtain COS bucket folder prefix.
 * @method void setCosPrefix(string $CosPrefix) Set COS bucket folder prefix.
 * @method string getCosFileName() Obtain COS filename.
 * @method void setCosFileName(string $CosFileName) Set COS filename.
 */
class ModifyLiveSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var integer The COS application ID.
**Please note that this parameter is required now**.
     */
    public $CosAppId;

    /**
     * @var string The COS bucket name.
Note: Do not include the `-[appid]` part in the value of `CosBucket`.
**Please note that this parameter is required now**.
     */
    public $CosBucket;

    /**
     * @var string The COS region.
**Please note that this parameter is required now**.
     */
    public $CosRegion;

    /**
     * @var string Template name.
Maximum length: 255 bytes.
     */
    public $TemplateName;

    /**
     * @var string Description.
Maximum length: 1,024 bytes.
     */
    public $Description;

    /**
     * @var integer Screencapturing interval in seconds. Default value: 10s.
Value range: 5-300s.
     */
    public $SnapshotInterval;

    /**
     * @var integer Screenshot width. Default value: 0 (original width).
     */
    public $Width;

    /**
     * @var integer Screenshot height. Default value: 0 (original height).
     */
    public $Height;

    /**
     * @var integer Whether to enable porn detection. Default value: 0.
0: do not enable.
1: enable.
     */
    public $PornFlag;

    /**
     * @var string COS bucket folder prefix.
     */
    public $CosPrefix;

    /**
     * @var string COS filename.
     */
    public $CosFileName;

    /**
     * @param integer $TemplateId Template ID.
     * @param integer $CosAppId The COS application ID.
**Please note that this parameter is required now**.
     * @param string $CosBucket The COS bucket name.
Note: Do not include the `-[appid]` part in the value of `CosBucket`.
**Please note that this parameter is required now**.
     * @param string $CosRegion The COS region.
**Please note that this parameter is required now**.
     * @param string $TemplateName Template name.
Maximum length: 255 bytes.
     * @param string $Description Description.
Maximum length: 1,024 bytes.
     * @param integer $SnapshotInterval Screencapturing interval in seconds. Default value: 10s.
Value range: 5-300s.
     * @param integer $Width Screenshot width. Default value: 0 (original width).
     * @param integer $Height Screenshot height. Default value: 0 (original height).
     * @param integer $PornFlag Whether to enable porn detection. Default value: 0.
0: do not enable.
1: enable.
     * @param string $CosPrefix COS bucket folder prefix.
     * @param string $CosFileName COS filename.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("CosAppId",$param) and $param["CosAppId"] !== null) {
            $this->CosAppId = $param["CosAppId"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SnapshotInterval",$param) and $param["SnapshotInterval"] !== null) {
            $this->SnapshotInterval = $param["SnapshotInterval"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PornFlag",$param) and $param["PornFlag"] !== null) {
            $this->PornFlag = $param["PornFlag"];
        }

        if (array_key_exists("CosPrefix",$param) and $param["CosPrefix"] !== null) {
            $this->CosPrefix = $param["CosPrefix"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
