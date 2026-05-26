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
 * Database parameter template
 *
 * @method string getTplName() Obtain Parameter template name.
 * @method void setTplName(string $TplName) Set Parameter template name.
 * @method string getTplId() Obtain Parameter template ID.
 * @method void setTplId(string $TplId) Set Parameter template ID.
 * @method string getMongoVersion() Obtain Database versions applicable to the parameter template.
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
 * @method void setMongoVersion(string $MongoVersion) Set Database versions applicable to the parameter template.
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
 * @method string getClusterType() Obtain Database type that the parameter template applies to.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
 * @method void setClusterType(string $ClusterType) Set Database type that the parameter template applies to.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
 * @method string getTplDesc() Obtain Parameter template description.
 * @method void setTplDesc(string $TplDesc) Set Parameter template description.
 * @method string getTplType() Obtain Template type.
-DEFAULT: System default template.
-CUSTOMIZE: custom template.
 * @method void setTplType(string $TplType) Set Template type.
-DEFAULT: System default template.
-CUSTOMIZE: custom template.
 */
class ParamTpl extends AbstractModel
{
    /**
     * @var string Parameter template name.
     */
    public $TplName;

    /**
     * @var string Parameter template ID.
     */
    public $TplId;

    /**
     * @var string Database versions applicable to the parameter template.
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
     * @var string Database type that the parameter template applies to.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
     */
    public $ClusterType;

    /**
     * @var string Parameter template description.
     */
    public $TplDesc;

    /**
     * @var string Template type.
-DEFAULT: System default template.
-CUSTOMIZE: custom template.
     */
    public $TplType;

    /**
     * @param string $TplName Parameter template name.
     * @param string $TplId Parameter template ID.
     * @param string $MongoVersion Database versions applicable to the parameter template.
- MONGO_36_WT: Version of the MongoDB 3.6 WiredTiger storage engine.
- MONGO_40_WT: Version of the MongoDB 4.0 WiredTiger storage engine.
- MONGO_42_WT: Version of the MongoDB 4.2 WiredTiger storage engine.
- MONGO_44_WT: Version of the MongoDB 4.4 WiredTiger storage engine.
- MONGO_50_WT: Version of the MongoDB 5.0 WiredTiger storage engine.
- MONGO_60_WT: version of the MongoDB 6.0 WiredTiger storage engine.
- MONGO_70_WT: version of the MongoDB 7.0 WiredTiger storage engine.
- MONGO_80_WT: version of the MongoDB 8.0 WiredTiger storage engine.
     * @param string $ClusterType Database type that the parameter template applies to.
- REPLSET: replica set instance.
- SHARD: shard instance.
-STANDALONE: Single-node instance.
     * @param string $TplDesc Parameter template description.
     * @param string $TplType Template type.
-DEFAULT: System default template.
-CUSTOMIZE: custom template.
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

        if (array_key_exists("TplId",$param) and $param["TplId"] !== null) {
            $this->TplId = $param["TplId"];
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

        if (array_key_exists("TplType",$param) and $param["TplType"] !== null) {
            $this->TplType = $param["TplType"];
        }
    }
}
