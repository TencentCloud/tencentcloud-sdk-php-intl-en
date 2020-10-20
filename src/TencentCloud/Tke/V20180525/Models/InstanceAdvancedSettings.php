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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes K8s cluster configuration and related information.
 *
 * @method string getMountTarget() Obtain Data disk mount point. By default, no data disk is mounted. Data disks in ext3, ext4, or XFS file system formats will be mounted directly, while data disks in other file systems and unformatted data disks will automatically be formatted as ext4 and then mounted. Please back up your data in advance. This setting is only applicable to CVMs with a single data disk.
Note: in multi-disk scenarios, use the DataDisks data structure below to set the corresponding information, such as cloud disk type, cloud disk size, mount path, and whether to perform formatting.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMountTarget(string $MountTarget) Set Data disk mount point. By default, no data disk is mounted. Data disks in ext3, ext4, or XFS file system formats will be mounted directly, while data disks in other file systems and unformatted data disks will automatically be formatted as ext4 and then mounted. Please back up your data in advance. This setting is only applicable to CVMs with a single data disk.
Note: in multi-disk scenarios, use the DataDisks data structure below to set the corresponding information, such as cloud disk type, cloud disk size, mount path, and whether to perform formatting.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getDockerGraphPath() Obtain Specified value of dockerd --graph. Default value: /var/lib/docker
Note: This field may return null, indicating that no valid value was found.
 * @method void setDockerGraphPath(string $DockerGraphPath) Set Specified value of dockerd --graph. Default value: /var/lib/docker
Note: This field may return null, indicating that no valid value was found.
 * @method string getUserScript() Obtain Base64-encoded user script, which will be executed after the K8s component starts running. You need to ensure the reentrant and retry logic of the script. The script and its log files can be viewed at the node path: /data/ccs_userscript/. If you want to initialize nodes before adding them to the scheduling list, you can use this parameter together with the unschedulable parameter. After the final initialization of userScript is completed, add the kubectl uncordon nodename --kubeconfig=/root/.kube/config command to enable the node for scheduling.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUserScript(string $UserScript) Set Base64-encoded user script, which will be executed after the K8s component starts running. You need to ensure the reentrant and retry logic of the script. The script and its log files can be viewed at the node path: /data/ccs_userscript/. If you want to initialize nodes before adding them to the scheduling list, you can use this parameter together with the unschedulable parameter. After the final initialization of userScript is completed, add the kubectl uncordon nodename --kubeconfig=/root/.kube/config command to enable the node for scheduling.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getUnschedulable() Obtain Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run kubectl uncordon nodename to enable this node for scheduling.
 * @method void setUnschedulable(integer $Unschedulable) Set Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run kubectl uncordon nodename to enable this node for scheduling.
 * @method array getLabels() Obtain Node label array
Note: This field may return null, indicating that no valid value was found.
 * @method void setLabels(array $Labels) Set Node label array
Note: This field may return null, indicating that no valid value was found.
 * @method array getDataDisks() Obtain Mounting information of multiple data disks. Ensure that the CVM purchase parameter specifies the information required for the purchase of multiple data disks. If the purchase of multiple data disks is also set in DataDisks under RunInstancesPara of the CreateClusterInstances API for adding nodes, you can refer to the example of adding cluster nodes (multiple data disks) for the CreateClusterInstances API.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setDataDisks(array $DataDisks) Set Mounting information of multiple data disks. Ensure that the CVM purchase parameter specifies the information required for the purchase of multiple data disks. If the purchase of multiple data disks is also set in DataDisks under RunInstancesPara of the CreateClusterInstances API for adding nodes, you can refer to the example of adding cluster nodes (multiple data disks) for the CreateClusterInstances API.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method InstanceExtraArgs getExtraArgs() Obtain Information about node custom parameters
Note: This field may return null, indicating that no valid value was found.
 * @method void setExtraArgs(InstanceExtraArgs $ExtraArgs) Set Information about node custom parameters
Note: This field may return null, indicating that no valid value was found.
 */
class InstanceAdvancedSettings extends AbstractModel
{
    /**
     * @var string Data disk mount point. By default, no data disk is mounted. Data disks in ext3, ext4, or XFS file system formats will be mounted directly, while data disks in other file systems and unformatted data disks will automatically be formatted as ext4 and then mounted. Please back up your data in advance. This setting is only applicable to CVMs with a single data disk.
Note: in multi-disk scenarios, use the DataDisks data structure below to set the corresponding information, such as cloud disk type, cloud disk size, mount path, and whether to perform formatting.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MountTarget;

    /**
     * @var string Specified value of dockerd --graph. Default value: /var/lib/docker
Note: This field may return null, indicating that no valid value was found.
     */
    public $DockerGraphPath;

    /**
     * @var string Base64-encoded user script, which will be executed after the K8s component starts running. You need to ensure the reentrant and retry logic of the script. The script and its log files can be viewed at the node path: /data/ccs_userscript/. If you want to initialize nodes before adding them to the scheduling list, you can use this parameter together with the unschedulable parameter. After the final initialization of userScript is completed, add the kubectl uncordon nodename --kubeconfig=/root/.kube/config command to enable the node for scheduling.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UserScript;

    /**
     * @var integer Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run kubectl uncordon nodename to enable this node for scheduling.
     */
    public $Unschedulable;

    /**
     * @var array Node label array
Note: This field may return null, indicating that no valid value was found.
     */
    public $Labels;

    /**
     * @var array Mounting information of multiple data disks. Ensure that the CVM purchase parameter specifies the information required for the purchase of multiple data disks. If the purchase of multiple data disks is also set in DataDisks under RunInstancesPara of the CreateClusterInstances API for adding nodes, you can refer to the example of adding cluster nodes (multiple data disks) for the CreateClusterInstances API.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $DataDisks;

    /**
     * @var InstanceExtraArgs Information about node custom parameters
Note: This field may return null, indicating that no valid value was found.
     */
    public $ExtraArgs;

    /**
     * @param string $MountTarget Data disk mount point. By default, no data disk is mounted. Data disks in ext3, ext4, or XFS file system formats will be mounted directly, while data disks in other file systems and unformatted data disks will automatically be formatted as ext4 and then mounted. Please back up your data in advance. This setting is only applicable to CVMs with a single data disk.
Note: in multi-disk scenarios, use the DataDisks data structure below to set the corresponding information, such as cloud disk type, cloud disk size, mount path, and whether to perform formatting.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $DockerGraphPath Specified value of dockerd --graph. Default value: /var/lib/docker
Note: This field may return null, indicating that no valid value was found.
     * @param string $UserScript Base64-encoded user script, which will be executed after the K8s component starts running. You need to ensure the reentrant and retry logic of the script. The script and its log files can be viewed at the node path: /data/ccs_userscript/. If you want to initialize nodes before adding them to the scheduling list, you can use this parameter together with the unschedulable parameter. After the final initialization of userScript is completed, add the kubectl uncordon nodename --kubeconfig=/root/.kube/config command to enable the node for scheduling.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Unschedulable Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run kubectl uncordon nodename to enable this node for scheduling.
     * @param array $Labels Node label array
Note: This field may return null, indicating that no valid value was found.
     * @param array $DataDisks Mounting information of multiple data disks. Ensure that the CVM purchase parameter specifies the information required for the purchase of multiple data disks. If the purchase of multiple data disks is also set in DataDisks under RunInstancesPara of the CreateClusterInstances API for adding nodes, you can refer to the example of adding cluster nodes (multiple data disks) for the CreateClusterInstances API.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param InstanceExtraArgs $ExtraArgs Information about node custom parameters
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }

        if (array_key_exists("DockerGraphPath",$param) and $param["DockerGraphPath"] !== null) {
            $this->DockerGraphPath = $param["DockerGraphPath"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new InstanceExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }
    }
}
