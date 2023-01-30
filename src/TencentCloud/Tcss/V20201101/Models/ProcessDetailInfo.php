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
 * Runtime security details - Process information
 *
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getProcessAuthority() Obtain Process permission
 * @method void setProcessAuthority(string $ProcessAuthority) Set Process permission
 * @method integer getProcessId() Obtain Process PID
 * @method void setProcessId(integer $ProcessId) Set Process PID
 * @method string getProcessStartUser() Obtain Process initiator
 * @method void setProcessStartUser(string $ProcessStartUser) Set Process initiator
 * @method string getProcessUserGroup() Obtain Process user group
 * @method void setProcessUserGroup(string $ProcessUserGroup) Set Process user group
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getProcessTree() Obtain Process tree
 * @method void setProcessTree(string $ProcessTree) Set Process tree
 * @method string getProcessMd5() Obtain Process MD5
 * @method void setProcessMd5(string $ProcessMd5) Set Process MD5
 * @method string getProcessParam() Obtain Process command line parameter
 * @method void setProcessParam(string $ProcessParam) Set Process command line parameter
 */
class ProcessDetailInfo extends AbstractModel
{
    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Process permission
     */
    public $ProcessAuthority;

    /**
     * @var integer Process PID
     */
    public $ProcessId;

    /**
     * @var string Process initiator
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
     * @var string Process tree
     */
    public $ProcessTree;

    /**
     * @var string Process MD5
     */
    public $ProcessMd5;

    /**
     * @var string Process command line parameter
     */
    public $ProcessParam;

    /**
     * @param string $ProcessName Process name
     * @param string $ProcessAuthority Process permission
     * @param integer $ProcessId Process PID
     * @param string $ProcessStartUser Process initiator
     * @param string $ProcessUserGroup Process user group
     * @param string $ProcessPath Process path
     * @param string $ProcessTree Process tree
     * @param string $ProcessMd5 Process MD5
     * @param string $ProcessParam Process command line parameter
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessAuthority",$param) and $param["ProcessAuthority"] !== null) {
            $this->ProcessAuthority = $param["ProcessAuthority"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
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

        if (array_key_exists("ProcessTree",$param) and $param["ProcessTree"] !== null) {
            $this->ProcessTree = $param["ProcessTree"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("ProcessParam",$param) and $param["ProcessParam"] !== null) {
            $this->ProcessParam = $param["ProcessParam"];
        }
    }
}
