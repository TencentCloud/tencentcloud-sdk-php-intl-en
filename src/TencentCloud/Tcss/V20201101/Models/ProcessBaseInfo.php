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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Runtime security - Basic process information
 *
 * @method string getProcessStartUser() Obtain process startup user
 * @method void setProcessStartUser(string $ProcessStartUser) Set process startup user
 * @method string getProcessUserGroup() Obtain Process user group
 * @method void setProcessUserGroup(string $ProcessUserGroup) Set Process user group
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getProcessParam() Obtain Process command line parameters
 * @method void setProcessParam(string $ProcessParam) Set Process command line parameters
 */
class ProcessBaseInfo extends AbstractModel
{
    /**
     * @var string process startup user
     */
    public $ProcessStartUser;

    /**
     * @var string Process user group
     */
    public $ProcessUserGroup;

    /**
     * @var string Process path
     */
    public $ProcessPath;

    /**
     * @var string Process command line parameters
     */
    public $ProcessParam;

    /**
     * @param string $ProcessStartUser process startup user
     * @param string $ProcessUserGroup Process user group
     * @param string $ProcessPath Process path
     * @param string $ProcessParam Process command line parameters
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
        if (array_key_exists("ProcessStartUser",$param) and $param["ProcessStartUser"] !== null) {
            $this->ProcessStartUser = $param["ProcessStartUser"];
        }

        if (array_key_exists("ProcessUserGroup",$param) and $param["ProcessUserGroup"] !== null) {
            $this->ProcessUserGroup = $param["ProcessUserGroup"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessParam",$param) and $param["ProcessParam"] !== null) {
            $this->ProcessParam = $param["ProcessParam"];
        }
    }
}
