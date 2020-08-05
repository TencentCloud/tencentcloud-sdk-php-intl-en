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
 * Screencapturing template information.
 *
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method integer getSnapshotInterval() Obtain Screencapturing interval. Value range: 5-300s.
 * @method void setSnapshotInterval(integer $SnapshotInterval) Set Screencapturing interval. Value range: 5-300s.
 * @method integer getWidth() Obtain Screenshot width. Value range: 0-3000. 
0: original width and fit to the original ratio.
 * @method void setWidth(integer $Width) Set Screenshot width. Value range: 0-3000. 
0: original width and fit to the original ratio.
 * @method integer getHeight() Obtain Screenshot height. Value range: 0-2000.
0: original height and fit to the original ratio.
 * @method void setHeight(integer $Height) Set Screenshot height. Value range: 0-2000.
0: original height and fit to the original ratio.
 * @method integer getPornFlag() Obtain Whether to enable porn detection. 0: no, 1: yes.
 * @method void setPornFlag(integer $PornFlag) Set Whether to enable porn detection. 0: no, 1: yes.
 * @method integer getCosAppId() Obtain COS application ID.
 * @method void setCosAppId(integer $CosAppId) Set COS application ID.
 * @method string getCosBucket() Obtain COS bucket name.
 * @method void setCosBucket(string $CosBucket) Set COS bucket name.
 * @method string getCosRegion() Obtain COS region.
 * @method void setCosRegion(string $CosRegion) Set COS region.
 * @method string getDescription() Obtain Template description.
 * @method void setDescription(string $Description) Set Template description.
 * @method string getCosPrefix() Obtain COS bucket folder prefix.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCosPrefix(string $CosPrefix) Set COS bucket folder prefix.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCosFileName() Obtain COS filename.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCosFileName(string $CosFileName) Set COS filename.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SnapshotTemplateInfo extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var integer Screencapturing interval. Value range: 5-300s.
     */
    public $SnapshotInterval;

    /**
     * @var integer Screenshot width. Value range: 0-3000. 
0: original width and fit to the original ratio.
     */
    public $Width;

    /**
     * @var integer Screenshot height. Value range: 0-2000.
0: original height and fit to the original ratio.
     */
    public $Height;

    /**
     * @var integer Whether to enable porn detection. 0: no, 1: yes.
     */
    public $PornFlag;

    /**
     * @var integer COS application ID.
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
     * @var string Template description.
     */
    public $Description;

    /**
     * @var string COS bucket folder prefix.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CosPrefix;

    /**
     * @var string COS filename.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CosFileName;

    /**
     * @param integer $TemplateId Template ID.
     * @param string $TemplateName Template name.
     * @param integer $SnapshotInterval Screencapturing interval. Value range: 5-300s.
     * @param integer $Width Screenshot width. Value range: 0-3000. 
0: original width and fit to the original ratio.
     * @param integer $Height Screenshot height. Value range: 0-2000.
0: original height and fit to the original ratio.
     * @param integer $PornFlag Whether to enable porn detection. 0: no, 1: yes.
     * @param integer $CosAppId COS application ID.
     * @param string $CosBucket COS bucket name.
     * @param string $CosRegion COS region.
     * @param string $Description Template description.
     * @param string $CosPrefix COS bucket folder prefix.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CosFileName COS filename.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
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

        if (array_key_exists("CosPrefix",$param) and $param["CosPrefix"] !== null) {
            $this->CosPrefix = $param["CosPrefix"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
