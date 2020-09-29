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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The entity associated with the policy
 *
 * @method string getId() Obtain Entity ID
 * @method void setId(string $Id) Set Entity ID
 * @method string getName() Obtain Entity Name
Note: This field may return null, indicating that no valid value was found.
 * @method void setName(string $Name) Set Entity Name
Note: This field may return null, indicating that no valid value was found.
 * @method integer getUin() Obtain Entity UIN
Note: This field may return null, indicating that no valid value was found.
 * @method void setUin(integer $Uin) Set Entity UIN
Note: This field may return null, indicating that no valid value was found.
 * @method integer getRelatedType() Obtain Type of entity association. 1: Associate by users; 2: Associate by User Groups
 * @method void setRelatedType(integer $RelatedType) Set Type of entity association. 1: Associate by users; 2: Associate by User Groups
 * @method string getAttachmentTime() Obtain Policy association time
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAttachmentTime(string $AttachmentTime) Set Policy association time
Note: this field may return `null`, indicating that no valid value was found.
 */
class AttachEntityOfPolicy extends AbstractModel
{
    /**
     * @var string Entity ID
     */
    public $Id;

    /**
     * @var string Entity Name
Note: This field may return null, indicating that no valid value was found.
     */
    public $Name;

    /**
     * @var integer Entity UIN
Note: This field may return null, indicating that no valid value was found.
     */
    public $Uin;

    /**
     * @var integer Type of entity association. 1: Associate by users; 2: Associate by User Groups
     */
    public $RelatedType;

    /**
     * @var string Policy association time
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AttachmentTime;

    /**
     * @param string $Id Entity ID
     * @param string $Name Entity Name
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Uin Entity UIN
Note: This field may return null, indicating that no valid value was found.
     * @param integer $RelatedType Type of entity association. 1: Associate by users; 2: Associate by User Groups
     * @param string $AttachmentTime Policy association time
Note: this field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RelatedType",$param) and $param["RelatedType"] !== null) {
            $this->RelatedType = $param["RelatedType"];
        }

        if (array_key_exists("AttachmentTime",$param) and $param["AttachmentTime"] !== null) {
            $this->AttachmentTime = $param["AttachmentTime"];
        }
    }
}
