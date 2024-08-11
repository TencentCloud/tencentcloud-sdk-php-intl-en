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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task details
 *
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatus() Obtain 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(integer $TaskStatus) Set 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskMsg() Obtain Task status message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskMsg(string $TaskMsg) Set Task status message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQrCodeUrl() Obtain QR code address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQrCodeUrl(string $QrCodeUrl) Set QR code address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPkgSize() Obtain Packet size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPkgSize(integer $PkgSize) Set Packet size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubPkgInfos() Obtain Subpackage information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubPkgInfos(array $SubPkgInfos) Set Subpackage information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQrCodeContent() Obtain QR code content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQrCodeContent(string $QrCodeContent) Set QR code content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribeMNPVersionCompileTaskExtInfo getExtInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtInfo(DescribeMNPVersionCompileTaskExtInfo $ExtInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPVersionCompileTaskResp extends AbstractModel
{
    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var string Task status message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskMsg;

    /**
     * @var string QR code address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QrCodeUrl;

    /**
     * @var integer Packet size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PkgSize;

    /**
     * @var array Subpackage information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubPkgInfos;

    /**
     * @var string QR code content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QrCodeContent;

    /**
     * @var DescribeMNPVersionCompileTaskExtInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtInfo;

    /**
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatus 1: Pending; 20: Running; 30: Failed; 60: Succeeded 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskMsg Task status message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QrCodeUrl QR code address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PkgSize Packet size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubPkgInfos Subpackage information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QrCodeContent QR code content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribeMNPVersionCompileTaskExtInfo $ExtInfo Additional information
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskMsg",$param) and $param["TaskMsg"] !== null) {
            $this->TaskMsg = $param["TaskMsg"];
        }

        if (array_key_exists("QrCodeUrl",$param) and $param["QrCodeUrl"] !== null) {
            $this->QrCodeUrl = $param["QrCodeUrl"];
        }

        if (array_key_exists("PkgSize",$param) and $param["PkgSize"] !== null) {
            $this->PkgSize = $param["PkgSize"];
        }

        if (array_key_exists("SubPkgInfos",$param) and $param["SubPkgInfos"] !== null) {
            $this->SubPkgInfos = [];
            foreach ($param["SubPkgInfos"] as $key => $value){
                $obj = new DescribeMNPVersionCompileTaskSubSimpleInfo();
                $obj->deserialize($value);
                array_push($this->SubPkgInfos, $obj);
            }
        }

        if (array_key_exists("QrCodeContent",$param) and $param["QrCodeContent"] !== null) {
            $this->QrCodeContent = $param["QrCodeContent"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = new DescribeMNPVersionCompileTaskExtInfo();
            $this->ExtInfo->deserialize($param["ExtInfo"]);
        }
    }
}
