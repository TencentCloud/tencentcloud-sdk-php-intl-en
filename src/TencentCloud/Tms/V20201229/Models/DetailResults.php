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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of results returned by text moderation
 *
 * @method string getLabel() Obtain Result of the moderation. <br>`Normal`: normal content; `Porn`: pornographic content; `Abuse`: abusive content; **Ad**: advertising content; `Custom`: custom violating content
 * @method void setLabel(string $Label) Set Result of the moderation. <br>`Normal`: normal content; `Porn`: pornographic content; `Abuse`: abusive content; **Ad**: advertising content; `Custom`: custom violating content
 * @method string getSuggestion() Obtain Recommended follow-up action. <br>`Block`: block it automatically; `Review`: review the content again in human; **Pass**: pass
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setSuggestion(string $Suggestion) Set Recommended follow-up action. <br>`Block`: block it automatically; `Review`: review the content again in human; **Pass**: pass
Note: This field may return `null`, indicating that no valid value can be found.
 * @method array getKeywords() Obtain Returns the information of keywords hit in the text. When no value is returned and `Score` is not empty, it means the `Label` is determined by the semantic-based detection model.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeywords(array $Keywords) Set Returns the information of keywords hit in the text. When no value is returned and `Score` is not empty, it means the `Label` is determined by the semantic-based detection model.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain This field indicates the convincing level of the `Label`, ranging from `0` (lowest) to `100` (highest). 
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setScore(integer $Score) Set This field indicates the convincing level of the `Label`, ranging from `0` (lowest) to `100` (highest). 
Note: This field may return `null`, indicating that no valid value can be found.
 * @method integer getLibType() Obtain It indicates the library type corresponding with the keyword. Valid values: `1` (blocklist/allowlist library) and `2` (custom keyword library). If no custom keyword library is configured, the default value is 1.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setLibType(integer $LibType) Set It indicates the library type corresponding with the keyword. Valid values: `1` (blocklist/allowlist library) and `2` (custom keyword library). If no custom keyword library is configured, the default value is 1.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getLibId() Obtain This field is **only valid when `Label` is `Custom`. It returns the custom library ID to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setLibId(string $LibId) Set This field is **only valid when `Label` is `Custom`. It returns the custom library ID to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getLibName() Obtain This field is **only valid when `Label` is `Custom` (custom keyword)`. It returns the custom library name to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setLibName(string $LibName) Set This field is **only valid when `Label` is `Custom` (custom keyword)`. It returns the custom library name to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getSubLabel() Obtain The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setSubLabel(string $SubLabel) Set The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method array getTags() Obtain Returns the keywords, label, sub-label and the score.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Returns the keywords, label, sub-label and the score.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DetailResults extends AbstractModel
{
    /**
     * @var string Result of the moderation. <br>`Normal`: normal content; `Porn`: pornographic content; `Abuse`: abusive content; **Ad**: advertising content; `Custom`: custom violating content
     */
    public $Label;

    /**
     * @var string Recommended follow-up action. <br>`Block`: block it automatically; `Review`: review the content again in human; **Pass**: pass
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Suggestion;

    /**
     * @var array Returns the information of keywords hit in the text. When no value is returned and `Score` is not empty, it means the `Label` is determined by the semantic-based detection model.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keywords;

    /**
     * @var integer This field indicates the convincing level of the `Label`, ranging from `0` (lowest) to `100` (highest). 
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Score;

    /**
     * @var integer It indicates the library type corresponding with the keyword. Valid values: `1` (blocklist/allowlist library) and `2` (custom keyword library). If no custom keyword library is configured, the default value is 1.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $LibType;

    /**
     * @var string This field is **only valid when `Label` is `Custom`. It returns the custom library ID to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $LibId;

    /**
     * @var string This field is **only valid when `Label` is `Custom` (custom keyword)`. It returns the custom library name to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $LibName;

    /**
     * @var string The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $SubLabel;

    /**
     * @var array Returns the keywords, label, sub-label and the score.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $Label Result of the moderation. <br>`Normal`: normal content; `Porn`: pornographic content; `Abuse`: abusive content; **Ad**: advertising content; `Custom`: custom violating content
     * @param string $Suggestion Recommended follow-up action. <br>`Block`: block it automatically; `Review`: review the content again in human; **Pass**: pass
Note: This field may return `null`, indicating that no valid value can be found.
     * @param array $Keywords Returns the information of keywords hit in the text. When no value is returned and `Score` is not empty, it means the `Label` is determined by the semantic-based detection model.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Score This field indicates the convincing level of the `Label`, ranging from `0` (lowest) to `100` (highest). 
Note: This field may return `null`, indicating that no valid value can be found.
     * @param integer $LibType It indicates the library type corresponding with the keyword. Valid values: `1` (blocklist/allowlist library) and `2` (custom keyword library). If no custom keyword library is configured, the default value is 1.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $LibId This field is **only valid when `Label` is `Custom`. It returns the custom library ID to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $LibName This field is **only valid when `Label` is `Custom` (custom keyword)`. It returns the custom library name to facilitate the library management and configuration.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $SubLabel The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param array $Tags Returns the keywords, label, sub-label and the score.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("LibType",$param) and $param["LibType"] !== null) {
            $this->LibType = $param["LibType"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
