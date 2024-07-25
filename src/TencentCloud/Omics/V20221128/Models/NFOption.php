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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nextflow option
 *
 * @method string getConfig() Obtain Config.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfig(string $Config) Set Config.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProfile() Obtain Profile.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProfile(string $Profile) Set Profile.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getReport() Obtain Report.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReport(boolean $Report) Set Report.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getResume() Obtain Resume.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResume(boolean $Resume) Set Resume.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNFVersion() Obtain Nextflow engine version. Valid values:
- 22.10.4
- 22.10.8 
- 23.10.1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNFVersion(string $NFVersion) Set Nextflow engine version. Valid values:
- 22.10.4
- 22.10.8 
- 23.10.1
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NFOption extends AbstractModel
{
    /**
     * @var string Config.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Config;

    /**
     * @var string Profile.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Profile;

    /**
     * @var boolean Report.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Report;

    /**
     * @var boolean Resume.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resume;

    /**
     * @var string Nextflow engine version. Valid values:
- 22.10.4
- 22.10.8 
- 23.10.1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NFVersion;

    /**
     * @param string $Config Config.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Profile Profile.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Report Report.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Resume Resume.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NFVersion Nextflow engine version. Valid values:
- 22.10.4
- 22.10.8 
- 23.10.1
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Report",$param) and $param["Report"] !== null) {
            $this->Report = $param["Report"];
        }

        if (array_key_exists("Resume",$param) and $param["Resume"] !== null) {
            $this->Resume = $param["Resume"];
        }

        if (array_key_exists("NFVersion",$param) and $param["NFVersion"] !== null) {
            $this->NFVersion = $param["NFVersion"];
        }
    }
}
