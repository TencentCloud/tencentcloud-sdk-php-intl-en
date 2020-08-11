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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagsSeq request structure.
 *
 * @method string getTagKey() Obtain Tag key, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried
 * @method void setTagKey(string $TagKey) Set Tag key, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried
 * @method string getTagValue() Obtain Tag value, which either exists or does not exist with the tag key. If it does not exist, all tags of the user will be queried
 * @method void setTagValue(string $TagValue) Set Tag value, which either exists or does not exist with the tag key. If it does not exist, all tags of the user will be queried
 * @method integer getOffset() Obtain Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
 * @method integer getLimit() Obtain Number of entries per page. Default value: 15
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 15
 * @method integer getCreateUin() Obtain Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
 * @method void setCreateUin(integer $CreateUin) Set Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
 * @method array getTagKeys() Obtain Tag key array, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried. If it is passed in together with `TagKey`, it will be used and the `TagKey` will be ignored.
 * @method void setTagKeys(array $TagKeys) Set Tag key array, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried. If it is passed in together with `TagKey`, it will be used and the `TagKey` will be ignored.
 * @method integer getShowProject() Obtain Whether to show project tag
 * @method void setShowProject(integer $ShowProject) Set Whether to show project tag
 */
class DescribeTagsSeqRequest extends AbstractModel
{
    /**
     * @var string Tag key, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried
     */
    public $TagKey;

    /**
     * @var string Tag value, which either exists or does not exist with the tag key. If it does not exist, all tags of the user will be queried
     */
    public $TagValue;

    /**
     * @var integer Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: 15
     */
    public $Limit;

    /**
     * @var integer Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
     */
    public $CreateUin;

    /**
     * @var array Tag key array, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried. If it is passed in together with `TagKey`, it will be used and the `TagKey` will be ignored.
     */
    public $TagKeys;

    /**
     * @var integer Whether to show project tag
     */
    public $ShowProject;

    /**
     * @param string $TagKey Tag key, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried
     * @param string $TagValue Tag value, which either exists or does not exist with the tag key. If it does not exist, all tags of the user will be queried
     * @param integer $Offset Data offset. Default value: 0. It must be an integer multiple of the `Limit` parameter
     * @param integer $Limit Number of entries per page. Default value: 15
     * @param integer $CreateUin Creator `Uin`. If this parameter is blank or left empty, only `Uin` will be used as a condition for query
     * @param array $TagKeys Tag key array, which either exists or does not exist with the tag value. If it does not exist, all tags of the user will be queried. If it is passed in together with `TagKey`, it will be used and the `TagKey` will be ignored.
     * @param integer $ShowProject Whether to show project tag
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("ShowProject",$param) and $param["ShowProject"] !== null) {
            $this->ShowProject = $param["ShowProject"];
        }
    }
}
