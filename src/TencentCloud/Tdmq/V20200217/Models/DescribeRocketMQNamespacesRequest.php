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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQNamespaces request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The max number of returned results.
 * @method void setLimit(integer $Limit) Set The max number of returned results.
 * @method string getNameKeyword() Obtain Search by name.
 * @method void setNameKeyword(string $NameKeyword) Set Search by name.
 */
class DescribeRocketMQNamespacesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The max number of returned results.
     */
    public $Limit;

    /**
     * @var string Search by name.
     */
    public $NameKeyword;

    /**
     * @param string $ClusterId Cluster ID.
     * @param integer $Offset Offset.
     * @param integer $Limit The max number of returned results.
     * @param string $NameKeyword Search by name.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }
    }
}
