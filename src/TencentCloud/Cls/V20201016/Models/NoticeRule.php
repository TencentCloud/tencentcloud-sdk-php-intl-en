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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification rules
 *
 * @method string getRule() Obtain Match rule JSON string.
**rule tree format is a nested structure JSON string**
`{"Value":"AND","Type":"Operation","Children":[{"Value":"OR","Type":"Operation","Children":[{"Type":"Condition","Value":"Level","Children":[{"Value":"In","Type":"Compare"},{"Value":"[1,0]","Type":"Value"}]},{"Type":"Condition","Value":"Level","Children":[{"Value":"NotIn","Type":"Compare"},{"Value":"[2]","Type":"Value"}]}]}]}`

**Rule tree limiting rules are as follows**:
-Valid values for Type in the top-level rule: `Condition`, `Operation`
-Valid values for the Type of the `Operation` sub-node: `Condition`, `Operation`
-Valid values for the Type of a `Condition` sub-node: `String`, `Compare`, `Array`, `TimeRange`, `Value`, `Key`.
-Other types have no sub-node
-When rule Type is `Operation`, the valid values for value are `AND`, `OR`.
-When rule Type is `Condition`, value is required and the number of child nodes cannot be less than 2.
-When the sub-node Type is `Compare`, the valid values for value are `>`, `<`, `>=`, `<=`, `=`, `!=`, `Between`, `NotBetween`, `=~`, `!=~`, `In`, `NotIn`.
-When the value is `Between` or `NotBetween`, the next sub-node value must be an array of length 2.
-When the value is `=~` or `!=~`, the next sub-node value must be a regular expression.
-When value is `In` or `NotIn`, the next sub-node value must be an array.

**Business parameter meaning**:
-Type: Condition means the rule condition. Value: Level means the alarm level.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 0 (warning), 1 (reminder), 2 (critical).
The following example means the alarm level belongs to reminder.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Level\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]}]}`

-Type: Condition means rule condition. Value: NotifyType refers to notification type.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 1 (alarm notification), 2 (recovery notification).
The following example means the notification type belongs to alarm notification or the notification type is not within restoration notification.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[2]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: AlarmID indicates alarm policy.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: alarm policy id array.
The following example means: The alarm policy belongs to alarm-53af048c-254b-4c73-bb48-xxx, alarm-6dfa8bc5-08da-4d64-b6cb-xxx or the alarm policy does not belong to alarm-1036314c-1e49-4cee-a8fb-xxx.
`"{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-53af048c-254b-4c73-bb48-xxx\\\",\\\"alarm-6dfa8bc5-08da-4d64-b6cb-xxx\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-1036314c-1e49-4cee-a8fb-xxx\\\"]\",\"Type\":\"Value\"}]}]}]}"`

-Type: Condition means the rule condition. Value: AlarmName means the alarm policy name.
-Sub-node Type supports `Compare`, and Value supports `=~`, `!=~`
-Next sub-node value supported values: Must be a regular expression.
The following example means the alarm policy name regular expression matching ^test$ or the alarm policy name regular expression mismatch ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: Label refers to alarm classification field.
- The sub-node Type supports `Compare`, and Value supports `In`, `NotIn`, `=~`, `!=~`.
-Supported values for the next sub-node value: `In`, `NotIn` where value is an array, `=~`, `!=~` where value is a regex.
The following example means: the alarm classification field key1 belongs to v1, or the alarm classification field key2 NOT_IN v2, or the alarm classification field key3 matches the regular expression ^test$, or the alarm classification field key4 does not match the regular expression ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key1\",\"Type\":\"Key\"},{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v1\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key2\",\"Type\":\"Key\"},{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v2\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key3\",\"Type\":\"Key\"},{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key4\",\"Type\":\"Key\"},{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means Rule Condition. Value: NotifyTime refers to notification time.
- Sub-node Type supports `Compare`, and Value supports `Between`, `NotBetween`
-Next sub-node value supported values: An array of strings with a length of 2 in the format `14:20:36`.
The following example indicates the notification time is within the specified scope 14:18:36 to 14:33:36 or not within specified range 14:20:36 to 14:30:36.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"Between\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:18:36\\\",\\\"14:33:36\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"NotBetween\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:20:36\\\",\\\"14:30:36\\\"]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means the rule condition. Value: Duration indicates the duration of the alarm.
-The sub-node Type supports `Compare`, and Value supports `>`, `<`, `>=`, `<=`.
-Next sub-node value supported values: integer value in minutes
The following example means: the duration of the alarm is greater than 1 minute, equal to or greater than 2 minutes, less than 3 minutes, or less than or equal to 4 minutes.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">\",\"Type\":\"Compare\"},{\"Value\":1,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">=\",\"Type\":\"Compare\"},{\"Value\":2,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<\",\"Type\":\"Compare\"},{\"Value\":3,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<=\",\"Type\":\"Compare\"},{\"Value\":4,\"Type\":\"Value\"}]}]}]}`
 * @method void setRule(string $Rule) Set Match rule JSON string.
**rule tree format is a nested structure JSON string**
`{"Value":"AND","Type":"Operation","Children":[{"Value":"OR","Type":"Operation","Children":[{"Type":"Condition","Value":"Level","Children":[{"Value":"In","Type":"Compare"},{"Value":"[1,0]","Type":"Value"}]},{"Type":"Condition","Value":"Level","Children":[{"Value":"NotIn","Type":"Compare"},{"Value":"[2]","Type":"Value"}]}]}]}`

**Rule tree limiting rules are as follows**:
-Valid values for Type in the top-level rule: `Condition`, `Operation`
-Valid values for the Type of the `Operation` sub-node: `Condition`, `Operation`
-Valid values for the Type of a `Condition` sub-node: `String`, `Compare`, `Array`, `TimeRange`, `Value`, `Key`.
-Other types have no sub-node
-When rule Type is `Operation`, the valid values for value are `AND`, `OR`.
-When rule Type is `Condition`, value is required and the number of child nodes cannot be less than 2.
-When the sub-node Type is `Compare`, the valid values for value are `>`, `<`, `>=`, `<=`, `=`, `!=`, `Between`, `NotBetween`, `=~`, `!=~`, `In`, `NotIn`.
-When the value is `Between` or `NotBetween`, the next sub-node value must be an array of length 2.
-When the value is `=~` or `!=~`, the next sub-node value must be a regular expression.
-When value is `In` or `NotIn`, the next sub-node value must be an array.

**Business parameter meaning**:
-Type: Condition means the rule condition. Value: Level means the alarm level.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 0 (warning), 1 (reminder), 2 (critical).
The following example means the alarm level belongs to reminder.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Level\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]}]}`

-Type: Condition means rule condition. Value: NotifyType refers to notification type.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 1 (alarm notification), 2 (recovery notification).
The following example means the notification type belongs to alarm notification or the notification type is not within restoration notification.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[2]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: AlarmID indicates alarm policy.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: alarm policy id array.
The following example means: The alarm policy belongs to alarm-53af048c-254b-4c73-bb48-xxx, alarm-6dfa8bc5-08da-4d64-b6cb-xxx or the alarm policy does not belong to alarm-1036314c-1e49-4cee-a8fb-xxx.
`"{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-53af048c-254b-4c73-bb48-xxx\\\",\\\"alarm-6dfa8bc5-08da-4d64-b6cb-xxx\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-1036314c-1e49-4cee-a8fb-xxx\\\"]\",\"Type\":\"Value\"}]}]}]}"`

-Type: Condition means the rule condition. Value: AlarmName means the alarm policy name.
-Sub-node Type supports `Compare`, and Value supports `=~`, `!=~`
-Next sub-node value supported values: Must be a regular expression.
The following example means the alarm policy name regular expression matching ^test$ or the alarm policy name regular expression mismatch ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: Label refers to alarm classification field.
- The sub-node Type supports `Compare`, and Value supports `In`, `NotIn`, `=~`, `!=~`.
-Supported values for the next sub-node value: `In`, `NotIn` where value is an array, `=~`, `!=~` where value is a regex.
The following example means: the alarm classification field key1 belongs to v1, or the alarm classification field key2 NOT_IN v2, or the alarm classification field key3 matches the regular expression ^test$, or the alarm classification field key4 does not match the regular expression ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key1\",\"Type\":\"Key\"},{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v1\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key2\",\"Type\":\"Key\"},{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v2\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key3\",\"Type\":\"Key\"},{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key4\",\"Type\":\"Key\"},{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means Rule Condition. Value: NotifyTime refers to notification time.
- Sub-node Type supports `Compare`, and Value supports `Between`, `NotBetween`
-Next sub-node value supported values: An array of strings with a length of 2 in the format `14:20:36`.
The following example indicates the notification time is within the specified scope 14:18:36 to 14:33:36 or not within specified range 14:20:36 to 14:30:36.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"Between\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:18:36\\\",\\\"14:33:36\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"NotBetween\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:20:36\\\",\\\"14:30:36\\\"]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means the rule condition. Value: Duration indicates the duration of the alarm.
-The sub-node Type supports `Compare`, and Value supports `>`, `<`, `>=`, `<=`.
-Next sub-node value supported values: integer value in minutes
The following example means: the duration of the alarm is greater than 1 minute, equal to or greater than 2 minutes, less than 3 minutes, or less than or equal to 4 minutes.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">\",\"Type\":\"Compare\"},{\"Value\":1,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">=\",\"Type\":\"Compare\"},{\"Value\":2,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<\",\"Type\":\"Compare\"},{\"Value\":3,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<=\",\"Type\":\"Compare\"},{\"Value\":4,\"Type\":\"Value\"}]}]}]}`
 * @method array getNoticeReceivers() Obtain Alarm notification recipient information.
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Alarm notification recipient information.
 * @method array getWebCallbacks() Obtain Alarm notification template callback information, including WeCom, DingTalk, and Lark.
 * @method void setWebCallbacks(array $WebCallbacks) Set Alarm notification template callback information, including WeCom, DingTalk, and Lark.
 * @method boolean getEscalate() Obtain Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
 * @method void setEscalate(boolean $Escalate) Set Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
 * @method integer getType() Obtain Alarm escalation conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered. Default is 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

 * @method void setType(integer $Type) Set Alarm escalation conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered. Default is 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

 * @method integer getInterval() Obtain Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
 * @method void setInterval(integer $Interval) Set Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
 * @method EscalateNoticeInfo getEscalateNotice() Obtain Notification channel configuration for the next step after alarm severity escalation.
 * @method void setEscalateNotice(EscalateNoticeInfo $EscalateNotice) Set Notification channel configuration for the next step after alarm severity escalation.
 */
class NoticeRule extends AbstractModel
{
    /**
     * @var string Match rule JSON string.
**rule tree format is a nested structure JSON string**
`{"Value":"AND","Type":"Operation","Children":[{"Value":"OR","Type":"Operation","Children":[{"Type":"Condition","Value":"Level","Children":[{"Value":"In","Type":"Compare"},{"Value":"[1,0]","Type":"Value"}]},{"Type":"Condition","Value":"Level","Children":[{"Value":"NotIn","Type":"Compare"},{"Value":"[2]","Type":"Value"}]}]}]}`

**Rule tree limiting rules are as follows**:
-Valid values for Type in the top-level rule: `Condition`, `Operation`
-Valid values for the Type of the `Operation` sub-node: `Condition`, `Operation`
-Valid values for the Type of a `Condition` sub-node: `String`, `Compare`, `Array`, `TimeRange`, `Value`, `Key`.
-Other types have no sub-node
-When rule Type is `Operation`, the valid values for value are `AND`, `OR`.
-When rule Type is `Condition`, value is required and the number of child nodes cannot be less than 2.
-When the sub-node Type is `Compare`, the valid values for value are `>`, `<`, `>=`, `<=`, `=`, `!=`, `Between`, `NotBetween`, `=~`, `!=~`, `In`, `NotIn`.
-When the value is `Between` or `NotBetween`, the next sub-node value must be an array of length 2.
-When the value is `=~` or `!=~`, the next sub-node value must be a regular expression.
-When value is `In` or `NotIn`, the next sub-node value must be an array.

**Business parameter meaning**:
-Type: Condition means the rule condition. Value: Level means the alarm level.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 0 (warning), 1 (reminder), 2 (critical).
The following example means the alarm level belongs to reminder.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Level\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]}]}`

-Type: Condition means rule condition. Value: NotifyType refers to notification type.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 1 (alarm notification), 2 (recovery notification).
The following example means the notification type belongs to alarm notification or the notification type is not within restoration notification.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[2]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: AlarmID indicates alarm policy.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: alarm policy id array.
The following example means: The alarm policy belongs to alarm-53af048c-254b-4c73-bb48-xxx, alarm-6dfa8bc5-08da-4d64-b6cb-xxx or the alarm policy does not belong to alarm-1036314c-1e49-4cee-a8fb-xxx.
`"{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-53af048c-254b-4c73-bb48-xxx\\\",\\\"alarm-6dfa8bc5-08da-4d64-b6cb-xxx\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-1036314c-1e49-4cee-a8fb-xxx\\\"]\",\"Type\":\"Value\"}]}]}]}"`

-Type: Condition means the rule condition. Value: AlarmName means the alarm policy name.
-Sub-node Type supports `Compare`, and Value supports `=~`, `!=~`
-Next sub-node value supported values: Must be a regular expression.
The following example means the alarm policy name regular expression matching ^test$ or the alarm policy name regular expression mismatch ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: Label refers to alarm classification field.
- The sub-node Type supports `Compare`, and Value supports `In`, `NotIn`, `=~`, `!=~`.
-Supported values for the next sub-node value: `In`, `NotIn` where value is an array, `=~`, `!=~` where value is a regex.
The following example means: the alarm classification field key1 belongs to v1, or the alarm classification field key2 NOT_IN v2, or the alarm classification field key3 matches the regular expression ^test$, or the alarm classification field key4 does not match the regular expression ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key1\",\"Type\":\"Key\"},{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v1\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key2\",\"Type\":\"Key\"},{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v2\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key3\",\"Type\":\"Key\"},{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key4\",\"Type\":\"Key\"},{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means Rule Condition. Value: NotifyTime refers to notification time.
- Sub-node Type supports `Compare`, and Value supports `Between`, `NotBetween`
-Next sub-node value supported values: An array of strings with a length of 2 in the format `14:20:36`.
The following example indicates the notification time is within the specified scope 14:18:36 to 14:33:36 or not within specified range 14:20:36 to 14:30:36.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"Between\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:18:36\\\",\\\"14:33:36\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"NotBetween\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:20:36\\\",\\\"14:30:36\\\"]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means the rule condition. Value: Duration indicates the duration of the alarm.
-The sub-node Type supports `Compare`, and Value supports `>`, `<`, `>=`, `<=`.
-Next sub-node value supported values: integer value in minutes
The following example means: the duration of the alarm is greater than 1 minute, equal to or greater than 2 minutes, less than 3 minutes, or less than or equal to 4 minutes.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">\",\"Type\":\"Compare\"},{\"Value\":1,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">=\",\"Type\":\"Compare\"},{\"Value\":2,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<\",\"Type\":\"Compare\"},{\"Value\":3,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<=\",\"Type\":\"Compare\"},{\"Value\":4,\"Type\":\"Value\"}]}]}]}`
     */
    public $Rule;

    /**
     * @var array Alarm notification recipient information.
     */
    public $NoticeReceivers;

    /**
     * @var array Alarm notification template callback information, including WeCom, DingTalk, and Lark.
     */
    public $WebCallbacks;

    /**
     * @var boolean Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
     */
    public $Escalate;

    /**
     * @var integer Alarm escalation conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered. Default is 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

     */
    public $Type;

    /**
     * @var integer Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
     */
    public $Interval;

    /**
     * @var EscalateNoticeInfo Notification channel configuration for the next step after alarm severity escalation.
     */
    public $EscalateNotice;

    /**
     * @param string $Rule Match rule JSON string.
**rule tree format is a nested structure JSON string**
`{"Value":"AND","Type":"Operation","Children":[{"Value":"OR","Type":"Operation","Children":[{"Type":"Condition","Value":"Level","Children":[{"Value":"In","Type":"Compare"},{"Value":"[1,0]","Type":"Value"}]},{"Type":"Condition","Value":"Level","Children":[{"Value":"NotIn","Type":"Compare"},{"Value":"[2]","Type":"Value"}]}]}]}`

**Rule tree limiting rules are as follows**:
-Valid values for Type in the top-level rule: `Condition`, `Operation`
-Valid values for the Type of the `Operation` sub-node: `Condition`, `Operation`
-Valid values for the Type of a `Condition` sub-node: `String`, `Compare`, `Array`, `TimeRange`, `Value`, `Key`.
-Other types have no sub-node
-When rule Type is `Operation`, the valid values for value are `AND`, `OR`.
-When rule Type is `Condition`, value is required and the number of child nodes cannot be less than 2.
-When the sub-node Type is `Compare`, the valid values for value are `>`, `<`, `>=`, `<=`, `=`, `!=`, `Between`, `NotBetween`, `=~`, `!=~`, `In`, `NotIn`.
-When the value is `Between` or `NotBetween`, the next sub-node value must be an array of length 2.
-When the value is `=~` or `!=~`, the next sub-node value must be a regular expression.
-When value is `In` or `NotIn`, the next sub-node value must be an array.

**Business parameter meaning**:
-Type: Condition means the rule condition. Value: Level means the alarm level.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 0 (warning), 1 (reminder), 2 (critical).
The following example means the alarm level belongs to reminder.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Level\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]}]}`

-Type: Condition means rule condition. Value: NotifyType refers to notification type.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: 1 (alarm notification), 2 (recovery notification).
The following example means the notification type belongs to alarm notification or the notification type is not within restoration notification.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[1]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyType\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[2]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: AlarmID indicates alarm policy.
-Sub-node Type supports `Compare`, and Value supports `In` and `NotIn`.
-Supported values for the next sub-node value: alarm policy id array.
The following example means: The alarm policy belongs to alarm-53af048c-254b-4c73-bb48-xxx, alarm-6dfa8bc5-08da-4d64-b6cb-xxx or the alarm policy does not belong to alarm-1036314c-1e49-4cee-a8fb-xxx.
`"{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-53af048c-254b-4c73-bb48-xxx\\\",\\\"alarm-6dfa8bc5-08da-4d64-b6cb-xxx\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmID\",\"Children\":[{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"alarm-1036314c-1e49-4cee-a8fb-xxx\\\"]\",\"Type\":\"Value\"}]}]}]}"`

-Type: Condition means the rule condition. Value: AlarmName means the alarm policy name.
-Sub-node Type supports `Compare`, and Value supports `=~`, `!=~`
-Next sub-node value supported values: Must be a regular expression.
The following example means the alarm policy name regular expression matching ^test$ or the alarm policy name regular expression mismatch ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"AlarmName\",\"Children\":[{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means rule condition. Value: Label refers to alarm classification field.
- The sub-node Type supports `Compare`, and Value supports `In`, `NotIn`, `=~`, `!=~`.
-Supported values for the next sub-node value: `In`, `NotIn` where value is an array, `=~`, `!=~` where value is a regex.
The following example means: the alarm classification field key1 belongs to v1, or the alarm classification field key2 NOT_IN v2, or the alarm classification field key3 matches the regular expression ^test$, or the alarm classification field key4 does not match the regular expression ^hahaha$.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key1\",\"Type\":\"Key\"},{\"Value\":\"In\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v1\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key2\",\"Type\":\"Key\"},{\"Value\":\"NotIn\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"v2\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key3\",\"Type\":\"Key\"},{\"Value\":\"=~\",\"Type\":\"Compare\"},{\"Value\":\"^test$\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Label\",\"Children\":[{\"Value\":\"key4\",\"Type\":\"Key\"},{\"Value\":\"!=~\",\"Type\":\"Compare\"},{\"Value\":\"^hahaha$\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means Rule Condition. Value: NotifyTime refers to notification time.
- Sub-node Type supports `Compare`, and Value supports `Between`, `NotBetween`
-Next sub-node value supported values: An array of strings with a length of 2 in the format `14:20:36`.
The following example indicates the notification time is within the specified scope 14:18:36 to 14:33:36 or not within specified range 14:20:36 to 14:30:36.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"Between\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:18:36\\\",\\\"14:33:36\\\"]\",\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"NotifyTime\",\"Children\":[{\"Value\":\"NotBetween\",\"Type\":\"Compare\"},{\"Value\":\"[\\\"14:20:36\\\",\\\"14:30:36\\\"]\",\"Type\":\"Value\"}]}]}]}`

-Type: Condition means the rule condition. Value: Duration indicates the duration of the alarm.
-The sub-node Type supports `Compare`, and Value supports `>`, `<`, `>=`, `<=`.
-Next sub-node value supported values: integer value in minutes
The following example means: the duration of the alarm is greater than 1 minute, equal to or greater than 2 minutes, less than 3 minutes, or less than or equal to 4 minutes.
`{\"Value\":\"AND\",\"Type\":\"Operation\",\"Children\":[{\"Value\":\"OR\",\"Type\":\"Operation\",\"Children\":[{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">\",\"Type\":\"Compare\"},{\"Value\":1,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\">=\",\"Type\":\"Compare\"},{\"Value\":2,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<\",\"Type\":\"Compare\"},{\"Value\":3,\"Type\":\"Value\"}]},{\"Type\":\"Condition\",\"Value\":\"Duration\",\"Children\":[{\"Value\":\"<=\",\"Type\":\"Compare\"},{\"Value\":4,\"Type\":\"Value\"}]}]}]}`
     * @param array $NoticeReceivers Alarm notification recipient information.
     * @param array $WebCallbacks Alarm notification template callback information, including WeCom, DingTalk, and Lark.
     * @param boolean $Escalate Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
     * @param integer $Type Alarm escalation conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered. Default is 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

     * @param integer $Interval Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
     * @param EscalateNoticeInfo $EscalateNotice Notification channel configuration for the next step after alarm severity escalation.
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
        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("Escalate",$param) and $param["Escalate"] !== null) {
            $this->Escalate = $param["Escalate"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("EscalateNotice",$param) and $param["EscalateNotice"] !== null) {
            $this->EscalateNotice = new EscalateNoticeInfo();
            $this->EscalateNotice->deserialize($param["EscalateNotice"]);
        }
    }
}
