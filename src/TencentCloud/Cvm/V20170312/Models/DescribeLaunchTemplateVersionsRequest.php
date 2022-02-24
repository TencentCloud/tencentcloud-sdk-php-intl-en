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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLaunchTemplateVersions request structure.
 *
 * @method string getLaunchTemplateId() Obtain The launch template ID
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set The launch template ID
 * @method array getLaunchTemplateVersions() Obtain List of instance launch templates.
 * @method void setLaunchTemplateVersions(array $LaunchTemplateVersions) Set List of instance launch templates.
 * @method integer getMinVersion() Obtain The minimum version number specified, which defaults to 0.
 * @method void setMinVersion(integer $MinVersion) Set The minimum version number specified, which defaults to 0.
 * @method integer getMaxVersion() Obtain The maximum version number specified, which defaults to 30.
 * @method void setMaxVersion(integer $MaxVersion) Set The maximum version number specified, which defaults to 30.
 * @method integer getOffset() Obtain The offset. Default value: 0. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set The offset. Default value: 0. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain The number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set The number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method boolean getDefaultVersion() Obtain Specify whether to query the default version. This parameter and `LaunchTemplateVersions` cannot be specified at the same time.
 * @method void setDefaultVersion(boolean $DefaultVersion) Set Specify whether to query the default version. This parameter and `LaunchTemplateVersions` cannot be specified at the same time.
 */
class DescribeLaunchTemplateVersionsRequest extends AbstractModel
{
    /**
     * @var string The launch template ID
     */
    public $LaunchTemplateId;

    /**
     * @var array List of instance launch templates.
     */
    public $LaunchTemplateVersions;

    /**
     * @var integer The minimum version number specified, which defaults to 0.
     */
    public $MinVersion;

    /**
     * @var integer The maximum version number specified, which defaults to 30.
     */
    public $MaxVersion;

    /**
     * @var integer The offset. Default value: 0. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer The number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var boolean Specify whether to query the default version. This parameter and `LaunchTemplateVersions` cannot be specified at the same time.
     */
    public $DefaultVersion;

    /**
     * @param string $LaunchTemplateId The launch template ID
     * @param array $LaunchTemplateVersions List of instance launch templates.
     * @param integer $MinVersion The minimum version number specified, which defaults to 0.
     * @param integer $MaxVersion The maximum version number specified, which defaults to 30.
     * @param integer $Offset The offset. Default value: 0. For more information on `Offset`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit The number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param boolean $DefaultVersion Specify whether to query the default version. This parameter and `LaunchTemplateVersions` cannot be specified at the same time.
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
        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateVersions",$param) and $param["LaunchTemplateVersions"] !== null) {
            $this->LaunchTemplateVersions = $param["LaunchTemplateVersions"];
        }

        if (array_key_exists("MinVersion",$param) and $param["MinVersion"] !== null) {
            $this->MinVersion = $param["MinVersion"];
        }

        if (array_key_exists("MaxVersion",$param) and $param["MaxVersion"] !== null) {
            $this->MaxVersion = $param["MaxVersion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DefaultVersion",$param) and $param["DefaultVersion"] !== null) {
            $this->DefaultVersion = $param["DefaultVersion"];
        }
    }
}
