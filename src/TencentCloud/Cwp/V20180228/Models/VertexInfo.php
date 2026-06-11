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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attack backtracking node information
 *
 * @method integer getType() Obtain Node type: process: 1; network: 2; file: 3; ssh: 4;
 * @method void setType(integer $Type) Set Node type: process: 1; network: 2; file: 3; ssh: 4;
 * @method string getVid() Obtain VID contained in this node
 * @method void setVid(string $Vid) Set VID contained in this node
 * @method string getParentVid() Obtain Parent node VID of this node
 * @method void setParentVid(string $ParentVid) Set Parent node VID of this node
 * @method boolean getIsLeaf() Obtain Whether a leaf node
 * @method void setIsLeaf(boolean $IsLeaf) Set Whether a leaf node
 * @method string getProcNamePrefix() Obtain Process name. This parameter is used when Type is 1.
 * @method void setProcNamePrefix(string $ProcNamePrefix) Set Process name. This parameter is used when Type is 1.
 * @method string getProcNameMd5() Obtain Process name MD5. This parameter is used when Type is 1.
 * @method void setProcNameMd5(string $ProcNameMd5) Set Process name MD5. This parameter is used when Type is 1.
 * @method string getCmdLinePrefix() Obtain Command line. This parameter is used when Type is 1.
 * @method void setCmdLinePrefix(string $CmdLinePrefix) Set Command line. This parameter is used when Type is 1.
 * @method string getCmdLineMd5() Obtain Command line MD5. This parameter is used when Type is 1.
 * @method void setCmdLineMd5(string $CmdLineMd5) Set Command line MD5. This parameter is used when Type is 1.
 * @method string getFilePathPrefix() Obtain File path. This parameter is used when Type is 3.
 * @method void setFilePathPrefix(string $FilePathPrefix) Set File path. This parameter is used when Type is 3.
 * @method string getAddressPrefix() Obtain Request destination address. This parameter is used when Type is 2.
 * @method void setAddressPrefix(string $AddressPrefix) Set Request destination address. This parameter is used when Type is 2.
 * @method boolean getIsWeDetect() Obtain Whether a vulnerability node
 * @method void setIsWeDetect(boolean $IsWeDetect) Set Whether a vulnerability node
 * @method boolean getIsAlarm() Obtain Whether an alarm node
 * @method void setIsAlarm(boolean $IsAlarm) Set Whether an alarm node
 * @method string getFilePathMd5() Obtain File path MD5. This parameter is used when Type is 3.
 * @method void setFilePathMd5(string $FilePathMd5) Set File path MD5. This parameter is used when Type is 3.
 * @method string getAddressMd5() Obtain Request destination address MD5. This parameter is used when Type is 2.
 * @method void setAddressMd5(string $AddressMd5) Set Request destination address MD5. This parameter is used when Type is 2.
 */
class VertexInfo extends AbstractModel
{
    /**
     * @var integer Node type: process: 1; network: 2; file: 3; ssh: 4;
     */
    public $Type;

    /**
     * @var string VID contained in this node
     */
    public $Vid;

    /**
     * @var string Parent node VID of this node
     */
    public $ParentVid;

    /**
     * @var boolean Whether a leaf node
     */
    public $IsLeaf;

    /**
     * @var string Process name. This parameter is used when Type is 1.
     */
    public $ProcNamePrefix;

    /**
     * @var string Process name MD5. This parameter is used when Type is 1.
     */
    public $ProcNameMd5;

    /**
     * @var string Command line. This parameter is used when Type is 1.
     */
    public $CmdLinePrefix;

    /**
     * @var string Command line MD5. This parameter is used when Type is 1.
     */
    public $CmdLineMd5;

    /**
     * @var string File path. This parameter is used when Type is 3.
     */
    public $FilePathPrefix;

    /**
     * @var string Request destination address. This parameter is used when Type is 2.
     */
    public $AddressPrefix;

    /**
     * @var boolean Whether a vulnerability node
     */
    public $IsWeDetect;

    /**
     * @var boolean Whether an alarm node
     */
    public $IsAlarm;

    /**
     * @var string File path MD5. This parameter is used when Type is 3.
     */
    public $FilePathMd5;

    /**
     * @var string Request destination address MD5. This parameter is used when Type is 2.
     */
    public $AddressMd5;

    /**
     * @param integer $Type Node type: process: 1; network: 2; file: 3; ssh: 4;
     * @param string $Vid VID contained in this node
     * @param string $ParentVid Parent node VID of this node
     * @param boolean $IsLeaf Whether a leaf node
     * @param string $ProcNamePrefix Process name. This parameter is used when Type is 1.
     * @param string $ProcNameMd5 Process name MD5. This parameter is used when Type is 1.
     * @param string $CmdLinePrefix Command line. This parameter is used when Type is 1.
     * @param string $CmdLineMd5 Command line MD5. This parameter is used when Type is 1.
     * @param string $FilePathPrefix File path. This parameter is used when Type is 3.
     * @param string $AddressPrefix Request destination address. This parameter is used when Type is 2.
     * @param boolean $IsWeDetect Whether a vulnerability node
     * @param boolean $IsAlarm Whether an alarm node
     * @param string $FilePathMd5 File path MD5. This parameter is used when Type is 3.
     * @param string $AddressMd5 Request destination address MD5. This parameter is used when Type is 2.
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

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }

        if (array_key_exists("ParentVid",$param) and $param["ParentVid"] !== null) {
            $this->ParentVid = $param["ParentVid"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ProcNamePrefix",$param) and $param["ProcNamePrefix"] !== null) {
            $this->ProcNamePrefix = $param["ProcNamePrefix"];
        }

        if (array_key_exists("ProcNameMd5",$param) and $param["ProcNameMd5"] !== null) {
            $this->ProcNameMd5 = $param["ProcNameMd5"];
        }

        if (array_key_exists("CmdLinePrefix",$param) and $param["CmdLinePrefix"] !== null) {
            $this->CmdLinePrefix = $param["CmdLinePrefix"];
        }

        if (array_key_exists("CmdLineMd5",$param) and $param["CmdLineMd5"] !== null) {
            $this->CmdLineMd5 = $param["CmdLineMd5"];
        }

        if (array_key_exists("FilePathPrefix",$param) and $param["FilePathPrefix"] !== null) {
            $this->FilePathPrefix = $param["FilePathPrefix"];
        }

        if (array_key_exists("AddressPrefix",$param) and $param["AddressPrefix"] !== null) {
            $this->AddressPrefix = $param["AddressPrefix"];
        }

        if (array_key_exists("IsWeDetect",$param) and $param["IsWeDetect"] !== null) {
            $this->IsWeDetect = $param["IsWeDetect"];
        }

        if (array_key_exists("IsAlarm",$param) and $param["IsAlarm"] !== null) {
            $this->IsAlarm = $param["IsAlarm"];
        }

        if (array_key_exists("FilePathMd5",$param) and $param["FilePathMd5"] !== null) {
            $this->FilePathMd5 = $param["FilePathMd5"];
        }

        if (array_key_exists("AddressMd5",$param) and $param["AddressMd5"] !== null) {
            $this->AddressMd5 = $param["AddressMd5"];
        }
    }
}
