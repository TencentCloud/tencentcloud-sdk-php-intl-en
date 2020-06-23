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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table tag information
 *
 * @method string getTableInstanceId() Obtain Table instance ID
 * @method void setTableInstanceId(string $TableInstanceId) Set Table instance ID
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getTableGroupId() Obtain Table group ID
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID
 * @method array getTags() Obtain Tag information
 * @method void setTags(array $Tags) Set Tag information
 * @method ErrorInfo getError() Obtain Error message
 * @method void setError(ErrorInfo $Error) Set Error message
 */
class TagsInfoOfTable extends AbstractModel
{
    /**
     * @var string Table instance ID
     */
    public $TableInstanceId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Table group ID
     */
    public $TableGroupId;

    /**
     * @var array Tag information
     */
    public $Tags;

    /**
     * @var ErrorInfo Error message
     */
    public $Error;

    /**
     * @param string $TableInstanceId Table instance ID
     * @param string $TableName Table name
     * @param string $TableGroupId Table group ID
     * @param array $Tags Tag information
     * @param ErrorInfo $Error Error message
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
        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }
    }
}
