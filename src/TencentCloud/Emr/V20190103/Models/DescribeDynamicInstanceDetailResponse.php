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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDynamicInstanceDetail response structure.
 *
 * @method string getRayClusterName() Obtain <p>Ray cluster name.</p>
 * @method void setRayClusterName(string $RayClusterName) Set <p>Ray cluster name.</p>
 * @method integer getRayClusterId() Obtain <p>Ray cluster ID.</p>
 * @method void setRayClusterId(integer $RayClusterId) Set <p>Ray cluster ID.</p>
 * @method integer getSubmitType() Obtain <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
 * @method void setSubmitType(integer $SubmitType) Set <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method array getLabels() Obtain <p>labels</p>
 * @method void setLabels(array $Labels) Set <p>labels</p>
 * @method array getTolerations() Obtain <p>Tolerations</p>
 * @method void setTolerations(array $Tolerations) Set <p>Tolerations</p>
 * @method array getEnv() Obtain <p>Environment variable.</p>
 * @method void setEnv(array $Env) Set <p>Environment variable.</p>
 * @method boolean getSupportExternalKerberosService() Obtain <p>Whether to rely on external Kerberos components.</p>
 * @method void setSupportExternalKerberosService(boolean $SupportExternalKerberosService) Set <p>Whether to rely on external Kerberos components.</p>
 * @method string getKerberosCluster() Obtain <p>Dependent Kerberos cluster.</p>
 * @method void setKerberosCluster(string $KerberosCluster) Set <p>Dependent Kerberos cluster.</p>
 * @method string getToken() Obtain <p>token</p>
 * @method void setToken(string $Token) Set <p>token</p>
 * @method DynamicInstanceGroupSpec getHeadGroupSpec() Obtain <p>HeadGroup</p>
 * @method void setHeadGroupSpec(DynamicInstanceGroupSpec $HeadGroupSpec) Set <p>HeadGroup</p>
 * @method array getWorkerGroupSpecs() Obtain <p>WorkerGroup</p>
 * @method void setWorkerGroupSpecs(array $WorkerGroupSpecs) Set <p>WorkerGroup</p>
 * @method boolean getStorageConfigEnabled() Obtain <p>Whether to enable storage configuration.</p>
 * @method void setStorageConfigEnabled(boolean $StorageConfigEnabled) Set <p>Whether to enable storage configuration.</p>
 * @method RedisInstance getRedisInstance() Obtain <p>Redis instance information.</p>
 * @method void setRedisInstance(RedisInstance $RedisInstance) Set <p>Redis instance information.</p>
 * @method CustomImage getCustomImage() Obtain <p>Image information.</p>
 * @method void setCustomImage(CustomImage $CustomImage) Set <p>Image information.</p>
 * @method string getDashboardUrl() Obtain <p>Dashboard link.</p>
 * @method void setDashboardUrl(string $DashboardUrl) Set <p>Dashboard link.</p>
 * @method integer getTotalPodCount() Obtain <p>Total number of Pods.</p>
 * @method void setTotalPodCount(integer $TotalPodCount) Set <p>Total number of Pods.</p>
 * @method boolean getHighAvailability() Obtain <p>Whether to support high availability.</p>
 * @method void setHighAvailability(boolean $HighAvailability) Set <p>Whether to support high availability.</p>
 * @method PersistentVolume getPersistentVolume() Obtain <p>Storage information.</p>
 * @method void setPersistentVolume(PersistentVolume $PersistentVolume) Set <p>Storage information.</p>
 * @method string getRayClusterYaml() Obtain <p>rayClusterYamlJson</p>
 * @method void setRayClusterYaml(string $RayClusterYaml) Set <p>rayClusterYamlJson</p>
 * @method ImageInfoV2 getImageInfoV2() Obtain <p>Image information.</p>
 * @method void setImageInfoV2(ImageInfoV2 $ImageInfoV2) Set <p>Image information.</p>
 * @method boolean getEnableHistoryServer() Obtain <p>Whether to enable log collection.</p>
 * @method void setEnableHistoryServer(boolean $EnableHistoryServer) Set <p>Whether to enable log collection.</p>
 * @method string getTensorBoardUrl() Obtain <p>TensorBoard link.</p>
 * @method void setTensorBoardUrl(string $TensorBoardUrl) Set <p>TensorBoard link.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDynamicInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Ray cluster name.</p>
     */
    public $RayClusterName;

    /**
     * @var integer <p>Ray cluster ID.</p>
     */
    public $RayClusterId;

    /**
     * @var integer <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
     */
    public $SubmitType;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>labels</p>
     */
    public $Labels;

    /**
     * @var array <p>Tolerations</p>
     */
    public $Tolerations;

    /**
     * @var array <p>Environment variable.</p>
     */
    public $Env;

    /**
     * @var boolean <p>Whether to rely on external Kerberos components.</p>
     */
    public $SupportExternalKerberosService;

    /**
     * @var string <p>Dependent Kerberos cluster.</p>
     */
    public $KerberosCluster;

    /**
     * @var string <p>token</p>
     */
    public $Token;

    /**
     * @var DynamicInstanceGroupSpec <p>HeadGroup</p>
     */
    public $HeadGroupSpec;

    /**
     * @var array <p>WorkerGroup</p>
     */
    public $WorkerGroupSpecs;

    /**
     * @var boolean <p>Whether to enable storage configuration.</p>
     */
    public $StorageConfigEnabled;

    /**
     * @var RedisInstance <p>Redis instance information.</p>
     */
    public $RedisInstance;

    /**
     * @var CustomImage <p>Image information.</p>
     */
    public $CustomImage;

    /**
     * @var string <p>Dashboard link.</p>
     */
    public $DashboardUrl;

    /**
     * @var integer <p>Total number of Pods.</p>
     */
    public $TotalPodCount;

    /**
     * @var boolean <p>Whether to support high availability.</p>
     */
    public $HighAvailability;

    /**
     * @var PersistentVolume <p>Storage information.</p>
     */
    public $PersistentVolume;

    /**
     * @var string <p>rayClusterYamlJson</p>
     */
    public $RayClusterYaml;

    /**
     * @var ImageInfoV2 <p>Image information.</p>
     */
    public $ImageInfoV2;

    /**
     * @var boolean <p>Whether to enable log collection.</p>
     */
    public $EnableHistoryServer;

    /**
     * @var string <p>TensorBoard link.</p>
     */
    public $TensorBoardUrl;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $RayClusterName <p>Ray cluster name.</p>
     * @param integer $RayClusterId <p>Ray cluster ID.</p>
     * @param integer $SubmitType <p>Creation type.</p><p>Enumeration values:</p><ul><li>1: form creation</li><li>2: YAML creation</li></ul>
     * @param string $Namespace <p>Namespace.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param array $Labels <p>labels</p>
     * @param array $Tolerations <p>Tolerations</p>
     * @param array $Env <p>Environment variable.</p>
     * @param boolean $SupportExternalKerberosService <p>Whether to rely on external Kerberos components.</p>
     * @param string $KerberosCluster <p>Dependent Kerberos cluster.</p>
     * @param string $Token <p>token</p>
     * @param DynamicInstanceGroupSpec $HeadGroupSpec <p>HeadGroup</p>
     * @param array $WorkerGroupSpecs <p>WorkerGroup</p>
     * @param boolean $StorageConfigEnabled <p>Whether to enable storage configuration.</p>
     * @param RedisInstance $RedisInstance <p>Redis instance information.</p>
     * @param CustomImage $CustomImage <p>Image information.</p>
     * @param string $DashboardUrl <p>Dashboard link.</p>
     * @param integer $TotalPodCount <p>Total number of Pods.</p>
     * @param boolean $HighAvailability <p>Whether to support high availability.</p>
     * @param PersistentVolume $PersistentVolume <p>Storage information.</p>
     * @param string $RayClusterYaml <p>rayClusterYamlJson</p>
     * @param ImageInfoV2 $ImageInfoV2 <p>Image information.</p>
     * @param boolean $EnableHistoryServer <p>Whether to enable log collection.</p>
     * @param string $TensorBoardUrl <p>TensorBoard link.</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("RayClusterName",$param) and $param["RayClusterName"] !== null) {
            $this->RayClusterName = $param["RayClusterName"];
        }

        if (array_key_exists("RayClusterId",$param) and $param["RayClusterId"] !== null) {
            $this->RayClusterId = $param["RayClusterId"];
        }

        if (array_key_exists("SubmitType",$param) and $param["SubmitType"] !== null) {
            $this->SubmitType = $param["SubmitType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("SupportExternalKerberosService",$param) and $param["SupportExternalKerberosService"] !== null) {
            $this->SupportExternalKerberosService = $param["SupportExternalKerberosService"];
        }

        if (array_key_exists("KerberosCluster",$param) and $param["KerberosCluster"] !== null) {
            $this->KerberosCluster = $param["KerberosCluster"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("HeadGroupSpec",$param) and $param["HeadGroupSpec"] !== null) {
            $this->HeadGroupSpec = new DynamicInstanceGroupSpec();
            $this->HeadGroupSpec->deserialize($param["HeadGroupSpec"]);
        }

        if (array_key_exists("WorkerGroupSpecs",$param) and $param["WorkerGroupSpecs"] !== null) {
            $this->WorkerGroupSpecs = [];
            foreach ($param["WorkerGroupSpecs"] as $key => $value){
                $obj = new DynamicInstanceGroupSpec();
                $obj->deserialize($value);
                array_push($this->WorkerGroupSpecs, $obj);
            }
        }

        if (array_key_exists("StorageConfigEnabled",$param) and $param["StorageConfigEnabled"] !== null) {
            $this->StorageConfigEnabled = $param["StorageConfigEnabled"];
        }

        if (array_key_exists("RedisInstance",$param) and $param["RedisInstance"] !== null) {
            $this->RedisInstance = new RedisInstance();
            $this->RedisInstance->deserialize($param["RedisInstance"]);
        }

        if (array_key_exists("CustomImage",$param) and $param["CustomImage"] !== null) {
            $this->CustomImage = new CustomImage();
            $this->CustomImage->deserialize($param["CustomImage"]);
        }

        if (array_key_exists("DashboardUrl",$param) and $param["DashboardUrl"] !== null) {
            $this->DashboardUrl = $param["DashboardUrl"];
        }

        if (array_key_exists("TotalPodCount",$param) and $param["TotalPodCount"] !== null) {
            $this->TotalPodCount = $param["TotalPodCount"];
        }

        if (array_key_exists("HighAvailability",$param) and $param["HighAvailability"] !== null) {
            $this->HighAvailability = $param["HighAvailability"];
        }

        if (array_key_exists("PersistentVolume",$param) and $param["PersistentVolume"] !== null) {
            $this->PersistentVolume = new PersistentVolume();
            $this->PersistentVolume->deserialize($param["PersistentVolume"]);
        }

        if (array_key_exists("RayClusterYaml",$param) and $param["RayClusterYaml"] !== null) {
            $this->RayClusterYaml = $param["RayClusterYaml"];
        }

        if (array_key_exists("ImageInfoV2",$param) and $param["ImageInfoV2"] !== null) {
            $this->ImageInfoV2 = new ImageInfoV2();
            $this->ImageInfoV2->deserialize($param["ImageInfoV2"]);
        }

        if (array_key_exists("EnableHistoryServer",$param) and $param["EnableHistoryServer"] !== null) {
            $this->EnableHistoryServer = $param["EnableHistoryServer"];
        }

        if (array_key_exists("TensorBoardUrl",$param) and $param["TensorBoardUrl"] !== null) {
            $this->TensorBoardUrl = $param["TensorBoardUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
