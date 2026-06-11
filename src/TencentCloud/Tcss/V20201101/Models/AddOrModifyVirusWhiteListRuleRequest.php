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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddOrModifyVirusWhiteListRule request structure.
 *
 * @method array getMd5List() Obtain <p>MD5 list.</p>
 * @method void setMd5List(array $Md5List) Set <p>MD5 list.</p>
 * @method integer getScope() Obtain <p>Scope: 1 indicates all images, and 0 indicates selected images.</p>
 * @method void setScope(integer $Scope) Set <p>Scope: 1 indicates all images, and 0 indicates selected images.</p>
 * @method integer getId() Obtain <p>Rule ID. Presence of rule ID values indicates modification, and absence of rule ID values indicates addition.</p>
 * @method void setId(integer $Id) Set <p>Rule ID. Presence of rule ID values indicates modification, and absence of rule ID values indicates addition.</p>
 * @method array getImageIds() Obtain <p>Image ID list, maximum 1,000. Required when Scope is 0 (selected images).</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image ID list, maximum 1,000. Required when Scope is 0 (selected images).</p>
 * @method string getRemark() Obtain <p>Rule remarks, with a maximum of 256 characters.</p>
 * @method void setRemark(string $Remark) Set <p>Rule remarks, with a maximum of 256 characters.</p>
 * @method integer getEventId() Obtain <p>Event ID.</p>
 * @method void setEventId(integer $EventId) Set <p>Event ID.</p>
 */
class AddOrModifyVirusWhiteListRuleRequest extends AbstractModel
{
    /**
     * @var array <p>MD5 list.</p>
     */
    public $Md5List;

    /**
     * @var integer <p>Scope: 1 indicates all images, and 0 indicates selected images.</p>
     */
    public $Scope;

    /**
     * @var integer <p>Rule ID. Presence of rule ID values indicates modification, and absence of rule ID values indicates addition.</p>
     */
    public $Id;

    /**
     * @var array <p>Image ID list, maximum 1,000. Required when Scope is 0 (selected images).</p>
     */
    public $ImageIds;

    /**
     * @var string <p>Rule remarks, with a maximum of 256 characters.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Event ID.</p>
     */
    public $EventId;

    /**
     * @param array $Md5List <p>MD5 list.</p>
     * @param integer $Scope <p>Scope: 1 indicates all images, and 0 indicates selected images.</p>
     * @param integer $Id <p>Rule ID. Presence of rule ID values indicates modification, and absence of rule ID values indicates addition.</p>
     * @param array $ImageIds <p>Image ID list, maximum 1,000. Required when Scope is 0 (selected images).</p>
     * @param string $Remark <p>Rule remarks, with a maximum of 256 characters.</p>
     * @param integer $EventId <p>Event ID.</p>
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
        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
