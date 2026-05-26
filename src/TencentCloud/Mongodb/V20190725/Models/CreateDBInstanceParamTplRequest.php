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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstanceParamTpl request structure.
 *
 * @method string getTplName() Obtain Parameter template name.
 * @method void setTplName(string $TplName) Set Parameter template name.
 * @method string getMongoVersion() Obtain Template version number. This field is required when **MirrorTplId** is empty. For the purchasable versions supported by the parameter template, use the interface [DescribeSpecInfo](https://www.tencentcloud.com/document/product/240/35767?from_cn_redirect=1).
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
 * @method void setMongoVersion(string $MongoVersion) Set Template version number. This field is required when **MirrorTplId** is empty. For the purchasable versions supported by the parameter template, use the interface [DescribeSpecInfo](https://www.tencentcloud.com/document/product/240/35767?from_cn_redirect=1).
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
 * @method string getClusterType() Obtain Instance type. This parameter is required when MirrorTplId is empty.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
 * @method void setClusterType(string $ClusterType) Set Instance type. This parameter is required when MirrorTplId is empty.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
 * @method string getTplDesc() Obtain Template description information.
 * @method void setTplDesc(string $TplDesc) Set Template description information.
 * @method array getParams() Obtain Template parameter. If this parameter is not configured, the system default template is used as the version parameter.
 * @method void setParams(array $Params) Set Template parameter. If this parameter is not configured, the system default template is used as the version parameter.
 * @method string getMirrorTplId() Obtain Image template ID. If an image template is specified, a new template is cloned from this template.
**Note**: When MirrorTplId is not empty, MongoVersion and ClusterType will follow the template version and instance type of MirrorTpl.
 * @method void setMirrorTplId(string $MirrorTplId) Set Image template ID. If an image template is specified, a new template is cloned from this template.
**Note**: When MirrorTplId is not empty, MongoVersion and ClusterType will follow the template version and instance type of MirrorTpl.
 */
class CreateDBInstanceParamTplRequest extends AbstractModel
{
    /**
     * @var string Parameter template name.
     */
    public $TplName;

    /**
     * @var string Template version number. This field is required when **MirrorTplId** is empty. For the purchasable versions supported by the parameter template, use the interface [DescribeSpecInfo](https://www.tencentcloud.com/document/product/240/35767?from_cn_redirect=1).
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
     */
    public $MongoVersion;

    /**
     * @var string Instance type. This parameter is required when MirrorTplId is empty.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
     */
    public $ClusterType;

    /**
     * @var string Template description information.
     */
    public $TplDesc;

    /**
     * @var array Template parameter. If this parameter is not configured, the system default template is used as the version parameter.
     */
    public $Params;

    /**
     * @var string Image template ID. If an image template is specified, a new template is cloned from this template.
**Note**: When MirrorTplId is not empty, MongoVersion and ClusterType will follow the template version and instance type of MirrorTpl.
     */
    public $MirrorTplId;

    /**
     * @param string $TplName Parameter template name.
     * @param string $MongoVersion Template version number. This field is required when **MirrorTplId** is empty. For the purchasable versions supported by the parameter template, use the interface [DescribeSpecInfo](https://www.tencentcloud.com/document/product/240/35767?from_cn_redirect=1).
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
     * @param string $ClusterType Instance type. This parameter is required when MirrorTplId is empty.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
     * @param string $TplDesc Template description information.
     * @param array $Params Template parameter. If this parameter is not configured, the system default template is used as the version parameter.
     * @param string $MirrorTplId Image template ID. If an image template is specified, a new template is cloned from this template.
**Note**: When MirrorTplId is not empty, MongoVersion and ClusterType will follow the template version and instance type of MirrorTpl.
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
        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("TplDesc",$param) and $param["TplDesc"] !== null) {
            $this->TplDesc = $param["TplDesc"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ParamType();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("MirrorTplId",$param) and $param["MirrorTplId"] !== null) {
            $this->MirrorTplId = $param["MirrorTplId"];
        }
    }
}
