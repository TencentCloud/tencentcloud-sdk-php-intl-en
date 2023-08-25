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
 * TESHD parameter configuration.
 *
 * @method string getType() Obtain The TSC type. Valid values:
<li>`TEHD-100`: TSC-100 (video TSC). </li>
<li>`TEHD-200`: TSC-200 (audio TSC). </li>
If this parameter is left blank, no modification will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The TSC type. Valid values:
<li>`TEHD-100`: TSC-100 (video TSC). </li>
<li>`TEHD-200`: TSC-200 (audio TSC). </li>
If this parameter is left blank, no modification will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getMaxVideoBitrate() Obtain The maximum video bitrate. If this parameter is not specified, no modifications will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) Set The maximum video bitrate. If this parameter is not specified, no modifications will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class TEHDConfigForUpdate extends AbstractModel
{
    /**
     * @var string The TSC type. Valid values:
<li>`TEHD-100`: TSC-100 (video TSC). </li>
<li>`TEHD-200`: TSC-200 (audio TSC). </li>
If this parameter is left blank, no modification will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer The maximum video bitrate. If this parameter is not specified, no modifications will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MaxVideoBitrate;

    /**
     * @param string $Type The TSC type. Valid values:
<li>`TEHD-100`: TSC-100 (video TSC). </li>
<li>`TEHD-200`: TSC-200 (audio TSC). </li>
If this parameter is left blank, no modification will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $MaxVideoBitrate The maximum video bitrate. If this parameter is not specified, no modifications will be made.
Note: This field may return·null, indicating that no valid values can be obtained.
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

        if (array_key_exists("MaxVideoBitrate",$param) and $param["MaxVideoBitrate"] !== null) {
            $this->MaxVideoBitrate = $param["MaxVideoBitrate"];
        }
    }
}
