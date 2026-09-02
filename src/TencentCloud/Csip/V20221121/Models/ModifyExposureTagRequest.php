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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyExposureTag request structure.
 *
 * @method array getExposureIDs() Obtain Boundary analysis ID set
 * @method void setExposureIDs(array $ExposureIDs) Set Boundary analysis ID set
 * @method string getTag() Obtain Tag.
 * @method void setTag(string $Tag) Set Tag.
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getComment() Obtain Remarks
 * @method void setComment(string $Comment) Set Remarks
 */
class ModifyExposureTagRequest extends AbstractModel
{
    /**
     * @var array Boundary analysis ID set
     */
    public $ExposureIDs;

    /**
     * @var string Tag.
     */
    public $Tag;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string Remarks
     */
    public $Comment;

    /**
     * @param array $ExposureIDs Boundary analysis ID set
     * @param string $Tag Tag.
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Comment Remarks
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
        if (array_key_exists("ExposureIDs",$param) and $param["ExposureIDs"] !== null) {
            $this->ExposureIDs = $param["ExposureIDs"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
