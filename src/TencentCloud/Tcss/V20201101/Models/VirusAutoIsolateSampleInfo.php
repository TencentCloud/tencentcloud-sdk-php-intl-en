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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the automatically isolated trojan sample
 *
 * @method string getMD5() Obtain MD5 checksum of the file
 * @method void setMD5(string $MD5) Set MD5 checksum of the file
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method string getModifyTime() Obtain Last edit time
 * @method void setModifyTime(string $ModifyTime) Set Last edit time
 * @method boolean getAutoIsolateSwitch() Obtain Automatic isolation switch. Valid values: `true` (on); `false` (off).
 * @method void setAutoIsolateSwitch(boolean $AutoIsolateSwitch) Set Automatic isolation switch. Valid values: `true` (on); `false` (off).
 */
class VirusAutoIsolateSampleInfo extends AbstractModel
{
    /**
     * @var string MD5 checksum of the file
     */
    public $MD5;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var string Last edit time
     */
    public $ModifyTime;

    /**
     * @var boolean Automatic isolation switch. Valid values: `true` (on); `false` (off).
     */
    public $AutoIsolateSwitch;

    /**
     * @param string $MD5 MD5 checksum of the file
     * @param string $VirusName Virus name
     * @param string $ModifyTime Last edit time
     * @param boolean $AutoIsolateSwitch Automatic isolation switch. Valid values: `true` (on); `false` (off).
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
        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AutoIsolateSwitch",$param) and $param["AutoIsolateSwitch"] !== null) {
            $this->AutoIsolateSwitch = $param["AutoIsolateSwitch"];
        }
    }
}
