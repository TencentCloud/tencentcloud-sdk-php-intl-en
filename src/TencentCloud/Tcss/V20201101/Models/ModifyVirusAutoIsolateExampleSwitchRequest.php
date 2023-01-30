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
 * ModifyVirusAutoIsolateExampleSwitch request structure.
 *
 * @method string getMD5() Obtain MD5 checksum of the file
 * @method void setMD5(string $MD5) Set MD5 checksum of the file
 * @method boolean getStatus() Obtain Switch. Valid values: `true` (on); `false` (off).
 * @method void setStatus(boolean $Status) Set Switch. Valid values: `true` (on); `false` (off).
 */
class ModifyVirusAutoIsolateExampleSwitchRequest extends AbstractModel
{
    /**
     * @var string MD5 checksum of the file
     */
    public $MD5;

    /**
     * @var boolean Switch. Valid values: `true` (on); `false` (off).
     */
    public $Status;

    /**
     * @param string $MD5 MD5 checksum of the file
     * @param boolean $Status Switch. Valid values: `true` (on); `false` (off).
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
