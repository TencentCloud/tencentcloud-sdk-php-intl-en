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
 * CreateLiveSnapshotTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name, which is a non-empty string.
Maximum length: 255 bytes.
 * @method void setTemplateName(string $TemplateName) Set Template name, which is a non-empty string.
Maximum length: 255 bytes.
 * @method integer getCosAppId() Obtain COS `AppId`.
 * @method void setCosAppId(integer $CosAppId) Set COS `AppId`.
 * @method string getCosBucket() Obtain COS bucket name.
 * @method void setCosBucket(string $CosBucket) Set COS bucket name.
 * @method string getCosRegion() Obtain COS region.
 * @method void setCosRegion(string $CosRegion) Set COS region.
 * @method string getDescription() Obtain Description.
Maximum length: 1,024 bytes.
 * @method void setDescription(string $Description) Set Description.
Maximum length: 1,024 bytes.
 * @method integer getSnapshotInterval() Obtain Screencapturing interval in seconds. Default value: 10s.
Value range: 5–600s.
 * @method void setSnapshotInterval(integer $SnapshotInterval) Set Screencapturing interval in seconds. Default value: 10s.
Value range: 5–600s.
 * @method integer getWidth() Obtain Screenshot width. Default value: 0 (original width).
 * @method void setWidth(integer $Width) Set Screenshot width. Default value: 0 (original width).
 * @method integer getHeight() Obtain Screenshot height. Default value: 0 (original height).
 * @method void setHeight(integer $Height) Set Screenshot height. Default value: 0 (original height).
 * @method integer getPornFlag() Obtain Whether to enable porn detection. 0: no, 1: yes. Default value: 0
 * @method void setPornFlag(integer $PornFlag) Set Whether to enable porn detection. 0: no, 1: yes. Default value: 0
 */
class CreateLiveSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name, which is a non-empty string.
Maximum length: 255 bytes.
     */
    public $TemplateName;

    /**
     * @var integer COS `AppId`.
     */
    public $CosAppId;

    /**
     * @var string COS bucket name.
     */
    public $CosBucket;

    /**
     * @var string COS region.
     */
    public $CosRegion;

    /**
     * @var string Description.
Maximum length: 1,024 bytes.
     */
    public $Description;

    /**
     * @var integer Screencapturing interval in seconds. Default value: 10s.
Value range: 5–600s.
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
     * @var integer Whether to enable porn detection. 0: no, 1: yes. Default value: 0
     */
    public $PornFlag;

    /**
     * @param string $TemplateName Template name, which is a non-empty string.
Maximum length: 255 bytes.
     * @param integer $CosAppId COS `AppId`.
     * @param string $CosBucket COS bucket name.
     * @param string $CosRegion COS region.
     * @param string $Description Description.
Maximum length: 1,024 bytes.
     * @param integer $SnapshotInterval Screencapturing interval in seconds. Default value: 10s.
Value range: 5–600s.
     * @param integer $Width Screenshot width. Default value: 0 (original width).
     * @param integer $Height Screenshot height. Default value: 0 (original height).
     * @param integer $PornFlag Whether to enable porn detection. 0: no, 1: yes. Default value: 0
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
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
    }
}
