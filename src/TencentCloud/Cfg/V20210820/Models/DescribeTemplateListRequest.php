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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTemplateList request structure.
 *
 * @method integer getLimit() Obtain Pagination limit.Maximum value:100.
 * @method void setLimit(integer $Limit) Set Pagination limit.Maximum value:100.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method string getTitle() Obtain Experiment name
 * @method void setTitle(string $Title) Set Experiment name
 * @method array getTag() Obtain Tag key
 * @method void setTag(array $Tag) Set Tag key
 * @method integer getIsUsed() Obtain Status. 1: in use; 2: not in use.
 * @method void setIsUsed(integer $IsUsed) Set Status. 1: in use; 2: not in use.
 * @method array getTags() Obtain Tag pair
 * @method void setTags(array $Tags) Set Tag pair
 * @method integer getTemplateSource() Obtain Template library source. 0: self-built; 1: recommended by experts.
 * @method void setTemplateSource(integer $TemplateSource) Set Template library source. 0: self-built; 1: recommended by experts.
 * @method array getTemplateIdList() Obtain Template ID
 * @method void setTemplateIdList(array $TemplateIdList) Set Template ID
 * @method array getFilters() Obtain Filter parameters
 * @method void setFilters(array $Filters) Set Filter parameters
 */
class DescribeTemplateListRequest extends AbstractModel
{
    /**
     * @var integer Pagination limit.Maximum value:100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var string Experiment name
     */
    public $Title;

    /**
     * @var array Tag key
     */
    public $Tag;

    /**
     * @var integer Status. 1: in use; 2: not in use.
     */
    public $IsUsed;

    /**
     * @var array Tag pair
     */
    public $Tags;

    /**
     * @var integer Template library source. 0: self-built; 1: recommended by experts.
     */
    public $TemplateSource;

    /**
     * @var array Template ID
     */
    public $TemplateIdList;

    /**
     * @var array Filter parameters
     */
    public $Filters;

    /**
     * @param integer $Limit Pagination limit.Maximum value:100.
     * @param integer $Offset Pagination offset
     * @param string $Title Experiment name
     * @param array $Tag Tag key
     * @param integer $IsUsed Status. 1: in use; 2: not in use.
     * @param array $Tags Tag pair
     * @param integer $TemplateSource Template library source. 0: self-built; 1: recommended by experts.
     * @param array $TemplateIdList Template ID
     * @param array $Filters Filter parameters
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TemplateSource",$param) and $param["TemplateSource"] !== null) {
            $this->TemplateSource = $param["TemplateSource"];
        }

        if (array_key_exists("TemplateIdList",$param) and $param["TemplateIdList"] !== null) {
            $this->TemplateIdList = $param["TemplateIdList"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ActionFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
