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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSTopics request structure.
 *
 * @method string getCLSRegion() Obtain 
 * @method void setCLSRegion(string $CLSRegion) Set 
 * @method string getLogsetId() Obtain 
 * @method void setLogsetId(string $LogsetId) Set 
 * @method array getTopicIds() Obtain 
 * @method void setTopicIds(array $TopicIds) Set 
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 */
class DescribeCLSTopicsRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $CLSRegion;

    /**
     * @var string 
     */
    public $LogsetId;

    /**
     * @var array 
     */
    public $TopicIds;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @param string $CLSRegion 
     * @param string $LogsetId 
     * @param array $TopicIds 
     * @param integer $Offset 
     * @param integer $Limit 
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
        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
