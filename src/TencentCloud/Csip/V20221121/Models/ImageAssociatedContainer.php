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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset of the host associated with the mirror
 *
 * @method string getContainerId() Obtain <p>Container id</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container id</p>
 * @method string getContainerName() Obtain <p>Container name.</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name.</p>
 * @method string getPodName() Obtain <p>pod name.</p>
 * @method void setPodName(string $PodName) Set <p>pod name.</p>
 * @method string getPodIp() Obtain <p>pod ip</p>
 * @method void setPodIp(string $PodIp) Set <p>pod ip</p>
 * @method string getOwnerAccountName() Obtain <p>Account name to which the pod belongs</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Account name to which the pod belongs</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the pod</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the pod</p>
 * @method string getOwnerUin() Obtain <p>uin of the account to which the pod belongs</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin of the account to which the pod belongs</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getClusterStatus() Obtain <p>Cluster status.</p><p>Enumeration values: </p><ul><li>Running: Running, </li><li>Exception: Exception, </li><li>Unknown: Unknown, </li><li>Creating: Creating.</li></ul>
 * @method void setClusterStatus(string $ClusterStatus) Set <p>Cluster status.</p><p>Enumeration values: </p><ul><li>Running: Running, </li><li>Exception: Exception, </li><li>Unknown: Unknown, </li><li>Creating: Creating.</li></ul>
 * @method string getCmd() Obtain <p>Image cmd</p>
 * @method void setCmd(string $Cmd) Set <p>Image cmd</p>
 * @method string getPodId() Obtain <p>Pod unique id</p>
 * @method void setPodId(string $PodId) Set <p>Pod unique id</p>
 * @method string getClusterCaMd5() Obtain <p>Unique cluster Id.</p>
 * @method void setClusterCaMd5(string $ClusterCaMd5) Set <p>Unique cluster Id.</p>
 */
class ImageAssociatedContainer extends AbstractModel
{
    /**
     * @var string <p>Container id</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Container name.</p>
     */
    public $ContainerName;

    /**
     * @var string <p>pod name.</p>
     */
    public $PodName;

    /**
     * @var string <p>pod ip</p>
     */
    public $PodIp;

    /**
     * @var string <p>Account name to which the pod belongs</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the pod</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>uin of the account to which the pod belongs</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster status.</p><p>Enumeration values: </p><ul><li>Running: Running, </li><li>Exception: Exception, </li><li>Unknown: Unknown, </li><li>Creating: Creating.</li></ul>
     */
    public $ClusterStatus;

    /**
     * @var string <p>Image cmd</p>
     */
    public $Cmd;

    /**
     * @var string <p>Pod unique id</p>
     */
    public $PodId;

    /**
     * @var string <p>Unique cluster Id.</p>
     */
    public $ClusterCaMd5;

    /**
     * @param string $ContainerId <p>Container id</p>
     * @param string $ContainerName <p>Container name.</p>
     * @param string $PodName <p>pod name.</p>
     * @param string $PodIp <p>pod ip</p>
     * @param string $OwnerAccountName <p>Account name to which the pod belongs</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the pod</p>
     * @param string $OwnerUin <p>uin of the account to which the pod belongs</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $ClusterStatus <p>Cluster status.</p><p>Enumeration values: </p><ul><li>Running: Running, </li><li>Exception: Exception, </li><li>Unknown: Unknown, </li><li>Creating: Creating.</li></ul>
     * @param string $Cmd <p>Image cmd</p>
     * @param string $PodId <p>Pod unique id</p>
     * @param string $ClusterCaMd5 <p>Unique cluster Id.</p>
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
        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("ClusterCaMd5",$param) and $param["ClusterCaMd5"] !== null) {
            $this->ClusterCaMd5 = $param["ClusterCaMd5"];
        }
    }
}
