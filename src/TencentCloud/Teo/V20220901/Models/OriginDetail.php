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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the origin.
 *
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
 * @method string getOrigin() Obtain Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, this parameter is IPv4 address, IPv6 address, or domain name;</li>
<li>When OriginType is COS, this parameter is the COS bucket's access domain;</li>
<li>When OriginType is AWS_S3, this parameter is the S3 bucket's access domain;</li>
<li>When OriginType is ORIGIN_GROUP, this parameter is the origin group ID;</li>
<li>When OriginType is VODEO, if VodeoDistributionRange is ALL, this parameter is "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, this parameter is the corresponding bucket domain.</li>

 * @method void setOrigin(string $Origin) Set Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, this parameter is IPv4 address, IPv6 address, or domain name;</li>
<li>When OriginType is COS, this parameter is the COS bucket's access domain;</li>
<li>When OriginType is AWS_S3, this parameter is the S3 bucket's access domain;</li>
<li>When OriginType is ORIGIN_GROUP, this parameter is the origin group ID;</li>
<li>When OriginType is VODEO, if VodeoDistributionRange is ALL, this parameter is "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, this parameter is the corresponding bucket domain.</li>

 * @method string getBackupOrigin() Obtain Secondary origin group ID. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
 * @method void setBackupOrigin(string $BackupOrigin) Set Secondary origin group ID. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
 * @method string getOriginGroupName() Obtain Primary origin group name. This parameter returns a value when OriginType is ORIGIN_GROUP.
 * @method void setOriginGroupName(string $OriginGroupName) Set Primary origin group name. This parameter returns a value when OriginType is ORIGIN_GROUP.
 * @method string getBackOriginGroupName() Obtain Secondary origin group name. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
 * @method void setBackOriginGroupName(string $BackOriginGroupName) Set Secondary origin group name. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
 * @method string getPrivateAccess() Obtain Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, off is the default value.
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, off is the default value.
 * @method array getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when PrivateAccess is on.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateParameters(array $PrivateParameters) Set Private authentication parameter. This parameter is valid only when PrivateAccess is on.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVodeoSubAppId() Obtain MO sub-application ID
 * @method void setVodeoSubAppId(integer $VodeoSubAppId) Set MO sub-application ID
 * @method string getVodeoDistributionRange() Obtain MO distribution range. Valid values: <li>All: All</li> <li>Bucket: Bucket</li>
 * @method void setVodeoDistributionRange(string $VodeoDistributionRange) Set MO distribution range. Valid values: <li>All: All</li> <li>Bucket: Bucket</li>
 * @method string getVodeoBucketId() Obtain MO bucket ID, required when the distribution range (DistributionRange) is bucket (Bucket)
 * @method void setVodeoBucketId(string $VodeoBucketId) Set MO bucket ID, required when the distribution range (DistributionRange) is bucket (Bucket)
 */
class OriginDetail extends AbstractModel
{
    /**
     * @var string Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
     */
    public $OriginType;

    /**
     * @var string Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, this parameter is IPv4 address, IPv6 address, or domain name;</li>
<li>When OriginType is COS, this parameter is the COS bucket's access domain;</li>
<li>When OriginType is AWS_S3, this parameter is the S3 bucket's access domain;</li>
<li>When OriginType is ORIGIN_GROUP, this parameter is the origin group ID;</li>
<li>When OriginType is VODEO, if VodeoDistributionRange is ALL, this parameter is "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, this parameter is the corresponding bucket domain.</li>

     */
    public $Origin;

    /**
     * @var string Secondary origin group ID. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
     */
    public $BackupOrigin;

    /**
     * @var string Primary origin group name. This parameter returns a value when OriginType is ORIGIN_GROUP.
     */
    public $OriginGroupName;

    /**
     * @var string Secondary origin group name. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
     */
    public $BackOriginGroupName;

    /**
     * @var string Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, off is the default value.
     */
    public $PrivateAccess;

    /**
     * @var array Private authentication parameter. This parameter is valid only when PrivateAccess is on.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateParameters;

    /**
     * @var integer MO sub-application ID
     */
    public $VodeoSubAppId;

    /**
     * @var string MO distribution range. Valid values: <li>All: All</li> <li>Bucket: Bucket</li>
     */
    public $VodeoDistributionRange;

    /**
     * @var string MO bucket ID, required when the distribution range (DistributionRange) is bucket (Bucket)
     */
    public $VodeoBucketId;

    /**
     * @param string $OriginType Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
     * @param string $Origin Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, this parameter is IPv4 address, IPv6 address, or domain name;</li>
<li>When OriginType is COS, this parameter is the COS bucket's access domain;</li>
<li>When OriginType is AWS_S3, this parameter is the S3 bucket's access domain;</li>
<li>When OriginType is ORIGIN_GROUP, this parameter is the origin group ID;</li>
<li>When OriginType is VODEO, if VodeoDistributionRange is ALL, this parameter is "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, this parameter is the corresponding bucket domain.</li>

     * @param string $BackupOrigin Secondary origin group ID. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
     * @param string $OriginGroupName Primary origin group name. This parameter returns a value when OriginType is ORIGIN_GROUP.
     * @param string $BackOriginGroupName Secondary origin group name. This parameter is valid only when OriginType is ORIGIN_GROUP and a secondary origin group is configured.
     * @param string $PrivateAccess Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, off is the default value.
     * @param array $PrivateParameters Private authentication parameter. This parameter is valid only when PrivateAccess is on.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VodeoSubAppId MO sub-application ID
     * @param string $VodeoDistributionRange MO distribution range. Valid values: <li>All: All</li> <li>Bucket: Bucket</li>
     * @param string $VodeoBucketId MO bucket ID, required when the distribution range (DistributionRange) is bucket (Bucket)
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("BackupOrigin",$param) and $param["BackupOrigin"] !== null) {
            $this->BackupOrigin = $param["BackupOrigin"];
        }

        if (array_key_exists("OriginGroupName",$param) and $param["OriginGroupName"] !== null) {
            $this->OriginGroupName = $param["OriginGroupName"];
        }

        if (array_key_exists("BackOriginGroupName",$param) and $param["BackOriginGroupName"] !== null) {
            $this->BackOriginGroupName = $param["BackOriginGroupName"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }

        if (array_key_exists("VodeoSubAppId",$param) and $param["VodeoSubAppId"] !== null) {
            $this->VodeoSubAppId = $param["VodeoSubAppId"];
        }

        if (array_key_exists("VodeoDistributionRange",$param) and $param["VodeoDistributionRange"] !== null) {
            $this->VodeoDistributionRange = $param["VodeoDistributionRange"];
        }

        if (array_key_exists("VodeoBucketId",$param) and $param["VodeoBucketId"] !== null) {
            $this->VodeoBucketId = $param["VodeoBucketId"];
        }
    }
}
